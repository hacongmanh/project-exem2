<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\ArticleCategory;
use App\Dog;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidataOrder;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = array();
        $data['keyword'] = '';

        $transfer = Dog::paginate(6);
        $articles_list = Dog::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $articles_list = $articles_list->where('category_id', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $articles_list = $articles_list->where('title', 'like', '%' . $request->get('keyword') . '%');
        }
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        $data['list'] = $articles_list
// ->where('status', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(6)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request
                ->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['transfer'] = $transfer;
        return view('home.pagination.transfer')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

            $dog = Dog::find($id);
            $cart = session()->get('cart');
            if ($cart == null){
                $cart = array();
            }
            $dogArray = null;
            if (array_key_exists($dog->id,$cart)){
                $dogArray = $cart[$dog->id];
            }
            if ($dogArray == null){
                $dogArray = array(
                    'id' => $dog->id,
                    'name' => $dog->name,
                    'price' => $dog->price,
                    'quantity' => 1,
                    'thumbnail' => $dog->large_photo
                );
            }else{
                return ;
            }
            $cart[$dog->id] = $dogArray;
            Session::put('cart',$cart);
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        }


    }


    public function submitCart(ValidataOrder $request)
    { $request->validated();
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
        Session::remove('cart');
    }

}
