<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function save_cart(Request $request){
        $product_id = $request ->prodcutid_hidden;
        $quantity = $request->qty;
        $data['list'] = DB::table('dogs')
            ->where('id', '$product_id')->get();
        echo '<pre>';
        print_r($data);
        echo '<pre>';
    }
}
