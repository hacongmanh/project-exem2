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


Route::resource('admin/dogs-categories','Admin\DogCategoryController');

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
Route::resource('homes','Home\HomeController');

Route::resource('about','Home\AboutController');

Route::resource('contact','Home\ContactController');

Route::resource('flow','Home\FlowController');

Route::resource('timeline','Home\TimelineController');

Route::resource('transfer','Home\TransferController');

Route::resource('blog','Home\BlogController');

// delete mem
Route::put('delete/article/{id}','Admin\ArticleController@DeleteArticle');
Route::put('delete/account/{id}','Admin\AccountController@DeleteArticle');
Route::put('delete/dog-category/{id}','Admin\DogCategoryController@DeleteDogCategory');
Route::put('delete/dogs/{id}','Admin\DogController@updateDog');
Route::put('delete/article-categories/{id}','Admin\ArticleCategoryController@updateArticleCategory');
