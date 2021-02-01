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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/nuevo', 'ProductController@create')->name('nuevo');

    Route::post('/createProduct', 'ProductController@store')->name('createProduct');

    Route::get('/product/edit/{id}', 'ProductController@edit');

    Route::post('/product/update/{id}', 'ProductController@update');

    Route::delete('/product/delete/{id}', 'ProductController@destroy');
});