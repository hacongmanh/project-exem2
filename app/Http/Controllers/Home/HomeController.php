<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\Dog;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidataOrder;
use App\Order;
use App\OrderDetail;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function index(){

       $data = array();
       $transfer = Dog::paginate(6);
       $article = Article::orderByRaw("RAND()")->take(3)->get();
       $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
       $home = Dog::orderByRaw("RAND()")->take(3)->get();
       $timelines = Timeline::orderByRaw("RAND()")->take(6)->get();
       $data['home'] = $home;
       $data['timelines'] = $timelines;
       $data['article'] = $article;
       $data['article_footer'] = $article_footer;
       $data['transfer'] = $transfer;
       return view('home.pagination.home')->with($data);
   }
    public function cart(Request $request)
    {

        return view('home.pagination.transfer', compact(''));
    }

    public function remove(Request $request)
    {
        $dogId = $request->get('id');
        $cart = \Illuminate\Support\Facades\Session::get('cart');
        if ($cart != null) {
            if (array_key_exists($dogId, $cart)) {
                unset($cart[$dogId]);
            }
        }
        Session::put('cart', $cart);
    }

    public function showCart(Request $request)
    {
        $data = array();
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        $carts = session()->get('cart');
        return view('home.order.order', compact('carts'))->with($data);
    }

    public function addToCart($id)
    {
        {

            $product = Dog::find($id);
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;

            } else {
                $cart[$id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'thumbnail' => $product->large_photo
                ];
            }
            session()->put('cart', $cart);
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        }


    }


    public function submitCart(ValidataOrder $request)
    {   $request->validated();
        $cart = Session::get('cart');
        if ($cart == null) {
            $cart = array();
        }
        $cart = new Order();
        $cart->ship_name = $request->get('ship_name');
        $cart->total = $request->get('total');
        $cart->ship_name = $request->get('ship_name');
        $cart->ship_phone = $request->get('ship_phone');
        $cart->ship_address = $request->get('ship_address');
        $cart->ship_email = $request->get('ship_email');
        $cart->notes = $request->get('notes');
        $cart->status = 'chưa duyệt';
        $cart->updated_at = Carbon::now()->addDays('0')->format('Y-m-d H:i:s');
        $cart->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');

        $orderDetail = array();
        foreach ($cart as $key => $carts) {
            $id = $cart['id'];
            $obj = Dog::find($id);
            if ($obj = null) {
                continue;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->dog_id = $id;
            $orderDetail->price = $obj ->price;
            $cart -> total += $orderDetail->total * $orderDetail;
            array_push($cart, $orderDetail);
        }
        DB::transaction(function () use ($cart,$orderDetail){
            $cart ->save();
            foreach ($orderDetail as $orderDetail){
                $orderDetail->order_id = $cart->id;
                $orderDetail->save();
            }
        });
    }




}
