<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('', function () {
//    return view('admin.admin-form');
//});

Route::resource('admin/accounts','AccountController');

Route::resource('admin/articles','Admin\ArticleController');

Route::resource('admin/dogs','Admin\DogController');

Route::resource('admin/article-categories','Admin\ArticleCategoryController');



Route::resource('admin/accounts','Admin\AccountController');

Route::resource('admin/articles','Admin\ArticleController');

Route::resource('admin/dogs','Admin\DogController');

//Route::resource('admin/article','AdminArticleController');
//Route::resource('admin/form/article','AdminFormArticleController');

Route::get('/', function () {
    return view('home.pagination.home');
});
Route::get('/about', function () {
    return view('home.pagination.about');
});
Route::get('/contact', function () {
    return view('home.pagination.contact');
});
Route::get('/blog', function () {
    return view('home.pagination.blog');
});
Route::get('/transfer', function () {
    return view('home.pagination.transfer');
});
Route::get('/timeline', function () {
    return view('home.pagination.timeline');
});
Route::get('/flow', function () {
    return view('home.pagination.flow');
});