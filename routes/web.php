<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/admin/create","ProductController@create")->name("admincreate");

Route::resource('product','ProductController');

Route::get("/products", "ProductController@index")->name("adminindex");

Route::get("/admin/show/{id}","ProductController@show")->name("adminshow");


Route::get("/admin/edit/{id}","ProductController@edit")->name("adminedit");

Route::post("/admin/store","ProductController@store")->name("adminstore");
Route::post("/admin/update","ProductController@update")->name("adminupdate");


Route::post("/admin/delete","ProductController@delete")->name("admindelete");