<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('guests', 'PageController');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get("/home/{post}", 'HomeController@show')->name('show');
    Route::get("/create", 'HomeController@create')->name('create');
    // Route::get("/store", 'HomeController@store')->name('store');
    Route::get("/edit/{post}", 'HomeController@edit')->name('edit');
});
