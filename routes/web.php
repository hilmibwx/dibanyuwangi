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

Route::get('/', 'FrontController@home')->name('homepage');
Route::get('wisata','FrontController@wisata')->name('wisata');
Route::get('akomodasi','FrontController@akomodasi')->name('akomodasi');
Route::get('cafe-resto','FrontController@caferesto')->name('caferesto');
Route::get('artikel','FrontController@artikel')->name('artikel');
Route::get('artikel/detail','FrontController@artikelshow')->name('artikelshow');
Route::get('contact-us','FrontController@contact')->name('contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
