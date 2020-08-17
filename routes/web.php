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

Route::get('/registers',function(){
   return view('home/login/register');
});
Route::get('/logins',function(){
   return view('home/login/signin');
});



Route::resource('/blog-home-1','Home\BlogHome1');

Route::resource('/blog-home-2','Home\BlogHome2');

Route::resource('/blog-home-3','Home\BlogHome3');



Route::resource('homes','Home\HomeController');

Route::resource('about','Home\AboutController');

Route::resource('contact','Home\ContactController');

Route::resource('timeline','Home\TimelineController');

Route::resource('transfer','Home\TransferController');

Route::resource('blog','Home\BlogController');

// delete mem

Route::get('/logins', 'Admin\LoginController@login');
Route::post('/logins', 'Admin\LoginController@processLogin');

Route::middleware(['admin.middleware'])->group(function (){
    Route::resource('/admin/dogs-categories','Admin\DogCategoryController');
    Route::resource('/admin/dogs','Admin\DogController');
    Route::resource('/admin/article-categories','Admin\ArticleCategoryController');
    Route::resource('/admin/articles','Admin\AccountController');
    Route::put('delete/article/{id}','Admin\ArticleController@DeleteArticle');
    Route::put('delete/account/{id}','Admin\AccountController@DeleteArticle');
    Route::put('delete/dog-category/{id}','Admin\DogCategoryController@DeleteDogCategory');
    Route::put('delete/dogs/{id}','Admin\DogController@updateDog');
    Route::put('delete/article-categories/{id}','Admin\ArticleCategoryController@updateArticleCategory');
});
