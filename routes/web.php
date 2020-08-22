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
Route::get('/registers', 'Admin\UserController@create');
Route::post('/registers', 'Admin\UserController@store');;

Route::middleware(['admin.middleware'])->group(function (){
    Route::resource('/admin/dogs-categories','Admin\DogCategoryController');
    Route::resource('/admin/dogs','Admin\DogController');
    Route::resource('/admin/article-categories','Admin\ArticleCategoryController');
    Route::resource('/admin/articles','Admin\ArticleController');
    Route::resource('/admin/accounts','Admin\AccountController');
    Route::resource('/admin/order','Admin\OrdersController');
    Route::put('delete/article/{id}','Admin\ArticleController@DeleteArticle');
    Route::put('delete/account/{id}','Admin\AccountController@DeleteArticle');
    Route::put('delete/dog-category/{id}','Admin\DogCategoryController@DeleteDogCategory');
    Route::put('delete/dogs/{id}','Admin\DogController@updateDog');
    Route::put('delete/article-categories/{id}','Admin\ArticleCategoryController@updateArticleCategory');
    Route::get('/logout-admin', 'Admin\LoginController@logOutAdmin');
});


//Route::resource('dog-products/{id}','DogProducts');
Route::get('order/{id}','OrderController@show');
Route::post('order','OrderController@store');
//Route::resource('timeline/{id}','TimelineController');

//cart
Route::get('/remove','Home\TransferController@remove');

Route::post('/save-cart','CartController@save_cart');
Route::get('/product/add-to-cart/{id}','Home\TransferController@addToCart')->name('addToCart');
Route::get('/product/show-cart','Home\TransferController@showCart')->name('showCart');

Route::get('shop/add-to-cart/{id}','Home\TransferController@addToCart')->name('addToCart');
Route::get('shop/show-cart','Home\TransferController@showCart')->name('showCart');
Route::get('shop/update-cart','Home\TransferController@updateCart')->name('updateCart');
Route::get('shop/delete-cart','Home\TransferController@deleteCart')->name('deleteCart');

Route::get('/logins', 'Admin\LoginController@login');
Route::get('/logout-user', 'Admin\UserController@logOutUser');
Route::get('/logins', 'Admin\LoginController@login');
Route::post('/logins', 'Admin\LoginController@processLogin');
Route::get('/registers', 'Admin\UserController@create');
Route::post('/registers', 'Admin\UserController@store');;



Route::resource('/admin/timeline','Admin\TimelineController');
