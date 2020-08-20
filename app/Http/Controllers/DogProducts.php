<?php

namespace App\Http\Controllers;

use App\Article;
use App\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DogProducts extends Controller
{
    public function index (){
        $data = array();
        $dog = Dog::query()->get();
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        $data['dog'] = $dog;
        return view('home.products.dogs')->with($data);
    }


     public function show($id)
     {
         $obj = Dog::find($id);
         if ($obj == null) {
             return view('error/error-404');
         }

         return view('home.products.dogs')->with('obj', $obj);
     }
}
