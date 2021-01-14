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
Route::get('wisata/{slug}','FrontController@wisatashow')->name('wisatashow');
Route::get('akomodasi','FrontController@akomodasi')->name('akomodasi');
Route::get('akomodasi/{slug}','FrontController@akomodasishow')->name('akomodasishow');
Route::get('cafe-resto','FrontController@caferesto')->name('caferesto');
Route::get('artikel','FrontController@artikel')->name('artikel');
Route::get('artikel/detail','FrontController@artikelshow')->name('artikelshow');
Route::get('contact-us','FrontController@contact')->name('contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', 'GeneralController@dashboard')->name('admin.dashboard');

    // General settings
    Route::get('general-settings', 'GeneralController@general')->name('admin.general');
    Route::post('general-settings', 'GeneralController@generalUpdate')->name('admin.general.update');

    // Manage Wisata
    Route::get('travel','TravelController@index')->name('admin.travel');
    Route::get('travel/create','TravelController@create')->name('admin.travel.create');
    Route::post('travel','TravelController@store')->name('admin.travel.store');
    Route::get('travel/edit/{id}','TravelController@edit')->name('admin.travel.edit');
    Route::post('travel/update/{id}','TravelController@update')->name('admin.travel.update');
    Route::delete('travel/{id}','TravelController@destroy')->name('admin.travel.destroy');

    // Manage Akomodasi
    Route::get('hotel','HotelController@index')->name('admin.hotel');
    Route::get('hotel/create','HotelController@create')->name('admin.hotel.create');
    Route::post('hotel','HotelController@store')->name('admin.hotel.store');
    Route::get('hotel/edit/{id}','HotelController@edit')->name('admin.hotel.edit');
    Route::post('hotel/update/{id}','HotelController@update')->name('admin.hotel.update');
    Route::delete('hotel/{id}','HotelController@destroy')->name('admin.hotel.destroy');
});
