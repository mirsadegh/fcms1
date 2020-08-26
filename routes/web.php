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


Route::get('/', 'IndexController@main');
Route::post('/message','IndexController@store_message');
Route::get('/messages','MessageController@index');
Route::get('/messages/delete/{message}','MessageController@destroy');
Route::get('sections/visibility/{section}','SectionController@visibility');
Route::get('contents/{section}','ContentController@edit');



// resources route
Route::resource('headers','HeaderController')->only(['edit','update']);
Route::resource('footers','FooterController')->only(['edit','update']);
Route::resource('sections','SectionController')->except(['index','show']);




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





