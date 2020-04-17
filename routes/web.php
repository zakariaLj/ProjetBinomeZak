<?php

use Illuminate\Support\Facades\Route;
use App\Header;
use App\About;
use App\Portfolio; 
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

return view('index', compact('header','about','portfolios'));
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');


// Route Admin -> Header

Route::get('/header/editHeader', 'HeaderController@edit')->name('header.edit');
Route::post('/header/editHeader', 'HeaderController@update')->name('header.update');

// Route Admin-> About

Route::get('/About/editAbout', 'AboutController@edit')->name('about');
Route::post('/About/editAbout', 'AboutController@update')->name('about.update');

// Route Admin->Portfolio

Route::resource('/Portfolio','PortfolioController');