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


// resources route
Route::resource('headers','HeaderController')->only(['edit','update']);
Route::resource('footers','FooterController')->only(['edit','update']);


Route::get('/', 'IndexController@main');
Route::post('/message','IndexController@store_message');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





