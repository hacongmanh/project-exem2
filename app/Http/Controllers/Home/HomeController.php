<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\Dog;
use App\Http\Controllers\Controller;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index(){
       $data = array();
       $article = Article::orderByRaw("RAND()")->take(3)->get();
       $article_footer = Article::orderByRaw("RAND()")->take(2)->get();
       $home = Dog::orderByRaw("RAND()")->take(3)->get();
       $timelines = Timeline::orderByRaw("RAND()")->take(6)->get();
       $data['home'] = $home;
       $data['timelines'] = $timelines;
       $data['article'] = $article;
       $data['article_footer'] = $article_footer;
       return view('home.pagination.home')->with($data);
   }

}
