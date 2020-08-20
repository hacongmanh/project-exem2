<?php

namespace App\Http\Controllers;

use App\Article;
use App\Dog;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index (){
        $data = array();
        $dog = Dog::query()->get();
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        $data['dog'] = $dog;
        return view('home.order.order')->with($data);
    }


    public function show($id)
    {
        $data = array();
        $obj = Dog::find($id);
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        $data['obj'] = $obj;
        if ($obj == null) {
            return view('error/error-404');
        }

        return view('home.order.order')->with($data);
    }

    public function store(Request $request)
    {

        $obj = new Order();
        $obj->ship_name = $request->get('ship_name');
        $obj->total = $request->get('total');
        $obj->ship_name = $request->get('ship_name');
        $obj->ship_phone = $request->get('ship_phone');
        $obj->ship_address = $request->get('ship_address');
        $obj->ship_email = $request->get('ship_email');
        $obj->notes = $request->get('notes');
        $obj->status = 'chưa duyệt';
        $obj->updated_at = Carbon::now()->addDays('0')->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/homes');

    }
}
