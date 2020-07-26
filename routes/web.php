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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'accounts'], function(){
    Route::get('', 'AccountController@index')->name('account.index');
    Route::get('create', 'AccountController@create')->name('account.create');
    Route::post('store', 'AccountController@store')->name('account.store');
    Route::get('plus/{account}', 'AccountController@plus')->name('account.plus');
    Route::get('minus/{account}', 'AccountController@minus')->name('account.minus');
    Route::post('update/{account}', 'AccountController@update')->name('account.update');
    Route::post('delete/{account}', 'AccountController@destroy')->name('account.destroy');
    Route::get('show/{account}', 'AccountController@show')->name('account.show');
 });

 Route::group(['prefix' => 'products'], function(){
    Route::get('', 'ProductController@index')->name('product.index');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('set/{product}', 'ProductController@set')->name('product.set');
    Route::get('unset/{product}', 'ProductController@unset')->name('product.unset');
    Route::post('update/{product}', 'ProductController@update')->name('product.update');
    Route::post('delete/{product}', 'ProductController@destroy')->name('product.destroy');
    Route::get('show/{product}', 'ProductController@show')->name('product.show');
 });

 Route::group(['prefix' => 'albums'], function(){
    Route::get('', 'ProductController@index')->name('album.index');
    Route::get('create', 'AlbumController@create')->name('album.create');
    Route::post('store', 'AlbumController@store')->name('album.store');
    Route::post('update/{album}', 'AlbumController@update')->name('album.update');
    Route::post('delete/{album}', 'AlbumController@destroy')->name('album.destroy');
    Route::get('show/{album}', 'AlbumController@show')->name('album.show');
 });

