<?php

use Illuminate\Support\Facades\Route;
use App\Subscribe;
use App\Service;
use App\Testimonial;
use App\Message;

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
    $subscribe = Subscribe::find(1);
    $services = Service::all();
    $testimonials = Testimonial::all();
    $messages = Message::all();
return view('index', compact('subscribe','services','testimonials','messages'));
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('subscribe.editSubscribe','SubscribeController@edit');
Route::post('subscribe.editSubscribe','SubscribeController@update')->name('subscribe.update'); 

Route::resource('service','ServiceController');
Route::resource('testimonial','TestimonialController');

Route::post('/message','MessageController@store')->name('message.store');
Route::get('/admin/message','MessageController@index');
