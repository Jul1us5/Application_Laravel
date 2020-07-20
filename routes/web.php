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

Route::group(['prefix' => 'useriai'], function(){
    Route::get('', 'UserisController@index')->name('useris.index');
    Route::get('create', 'UserisController@create')->name('useris.create');
    Route::post('store', 'UserisController@store')->name('useris.store');
    Route::get('edit/{useris}', 'UserisController@edit')->name('useris.edit');
    Route::post('update/{useris}', 'UserisController@update')->name('useris.update');
    Route::post('delete/{useris}', 'UserisController@destroy')->name('useris.destroy');
    Route::get('show/{useris}', 'UserisController@show')->name('useris.show');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
