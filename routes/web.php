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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'PageController');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get("/{post}", 'HomeController@show')->name('show');
    Route::get("home/create", 'HomeController@create')->name('create');
    Route::post("/store", 'HomeController@store')->name('store');
    Route::get("/{post}/edit", 'HomeController@edit')->name('edit');
    Route::put("/{post}/update", 'HomeController@update')->name('update');
    Route::delete("/{post}", 'HomeController@destroy')->name('destroy');
});
