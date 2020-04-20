<?php

use Illuminate\Support\Facades\Route;
use App\Header;
use App\About;
use App\Portfolio; 
use App\Team;
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
    $header = Header::find(1);
    $about = About::find(1);
    $portfolios = Portfolio::all();
    $teams = Team::all();
    $subscribe = Subscribe::find(1);
    $services = Service::all();
    $testimonials = Testimonial::all();
    $messages = Message::all();

    
    return view('index', compact('header','about','portfolios','teams','subscribe','services','testimonials','messages'));
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('subscribe.editSubscribe','SubscribeController@edit');
Route::post('subscribe.editSubscribe','SubscribeController@update')->name('subscribe.update'); 

Route::resource('service','ServiceController');
Route::resource('testimonial','TestimonialController');

Route::get('/header/editHeader', 'HeaderController@edit')->name('header.edit');
Route::post('/header/editHeader', 'HeaderController@update')->name('header.update');

// Route Admin-> About

Route::get('/About/editAbout', 'AboutController@edit')->name('about');
Route::post('/About/editAbout', 'AboutController@update')->name('about.update');

// Route Admin->Portfolio

Route::resource('/Portfolio','PortfolioController');

// Route Admin-> Team

Route::resource('/Team','TeamController');
Route::post('/message','MessageController@store')->name('message.store');
Route::get('/admin/message','MessageController@index');
