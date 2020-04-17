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
return view('index');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('subscribe.editSubscribe','SubscribeController@edit');
Route::post('subscribe.editSubscribe','SubscribeController@update')->name('subscribe.update'); 