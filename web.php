<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('product','ProductController@index');

Route::get('product/create','ProductController@create');

Route::get('product/{id}','ProductController@show');

Route::delete('product/{id}','ProductController@destroy');

Route::get('product/{id}/edit','ProductController@edit')->name('product.edit');

Route::get('product/{id}','ProductController@find')->name('product.ind');


