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
Route::get('/a', function() {
    dd(session()->get('error'));
});

Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('/home', 'HomeController@home');
Route::get('/success', 'HomeController@success');
Route::get('logout', 'HomeController@logout');

//Route post
Route::post('postLogin', 'HomeController@postLogin')->name('postLogin');
Route::post('submitStudent', 'HomeController@submitStudent')->name('submitStudent');
Route::post('postPrice', 'HomeController@postPrice')->name('postPrice');
Route::post('submitForm', 'HomeController@submitForm')->name('submitForm');