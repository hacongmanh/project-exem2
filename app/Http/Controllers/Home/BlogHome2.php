<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\Http\Controllers\Controller;


class BlogHome2 extends Controller
{

    public function index (){
        $data = array();
        $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
        $data['article_footer'] = $article_footer;
        return view('home.pagination.blog-home-2')->with($data);
    }
}
