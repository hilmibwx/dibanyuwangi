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
Route::get('cafe-resto/{slug}','FrontController@caferestoshow')->name('caferestoshow');
Route::get('artikel','FrontController@artikel')->name('artikel');
Route::get('artikel/search','FrontController@search')->name('search');
Route::get('artikel/{slug}','FrontController@artikelshow')->name('artikelshow');
Route::get('categories/{category:slug}','FrontController@category')->name('category');
Route::get('tags/{tag:slug}','FrontController@tag')->name('tag');
Route::get('contact-us','FrontController@contact')->name('contact');
Route::post('contact-us','FrontController@message')->name('message');
Route::get('page/{slug}','FrontController@page')->name('page');

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

    // Manage Resto
    Route::get('resto','RestaurantController@index')->name('admin.resto');
    Route::get('resto/create','RestaurantController@create')->name('admin.resto.create');
    Route::post('resto','RestaurantController@store')->name('admin.resto.store');
    Route::get('resto/edit/{id}','RestaurantController@edit')->name('admin.resto.edit');
    Route::post('resto/update/{id}','RestaurantController@update')->name('admin.resto.update');
    Route::delete('resto/{id}','RestaurantController@destroy')->name('admin.resto.destroy');

     // Manage Categories
     Route::get('categories', 'CategoryController@index')->name('admin.category');
     Route::get('categories/create', 'CategoryController@create')->name('admin.category.create');
     Route::post('categories/create', 'CategoryController@store')->name('admin.category.store');
     Route::get('categories/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
     Route::post('categories/edit/{id}', 'CategoryController@update')->name('admin.category.update');
     Route::delete('categories/destroy/{id}','CategoryController@destroy')->name('admin.category.destroy');

     // Manage Tags
     Route::get('tags', 'TagController@index')->name('admin.tag');
     Route::get('tags/create', 'TagController@create')->name('admin.tag.create');
     Route::post('tags/create', 'TagController@store')->name('admin.tag.store');
     Route::get('tags/edit/{id}', 'TagController@edit')->name('admin.tag.edit');
     Route::post('tags/edit/{id}', 'TagController@update')->name('admin.tag.update');
     Route::delete('tags/destroy/{id}','TagController@destroy')->name('admin.tag.destroy');

      // Manage Blog
    Route::get('post','PostController@index')->name('admin.post');

    Route::get('post/create','PostController@create')->name('admin.post.create');

    Route::post('post/create','PostController@store')->name('admin.post.store');

    Route::post('/images', 'PostController@uploadImage')->name('admin.post.image');

    Route::get('post/edit/{id}','PostController@edit')->name('admin.post.edit');

    Route::post('post/edit/{id}','PostController@update')->name('admin.post.update');

    Route::get('post/trash','PostController@trash')->name('admin.post.trash');

    Route::post('post/{id}/restore','PostController@restore')->name('admin.post.restore');

    Route::delete('post/trash/{id}','PostController@destroy')->name('admin.post.destroy');

    Route::delete('post/destroy/{id}','PostController@deletePermanent')->name('admin.post.deletePermanent');

    // Manage Message
    Route::get('message','MessageController@index')->name('admin.message');

     //  Manage Page

     Route::get('page','PageController@index')->name('admin.page');

     Route::get('page/create','PageController@create')->name('admin.page.create');   
    
     Route::post('page/create','PageController@store')->name('admin.page.store');
 
     Route::get('page/edit/{id}','PageController@edit')->name('admin.page.edit');   
      
     Route::post('page/edit/{id}','PageController@update')->name('admin.page.update');
 
     Route::delete('page/destroy/{id}','PageController@destroy')->name('admin.page.destroy');

      // Manage Link
    Route::get('link','LinkController@index')->name('admin.link');

    Route::get('link/create','LinkController@create')->name('admin.link.create');

    Route::post('link/create','LinkController@store')->name('admin.link.store');

    Route::get('link/edit/{id}','LinkController@edit')->name('admin.link.edit');

    Route::post('link/edit/{id}','LinkController@update')->name('admin.link.update');

    Route::delete('link/destroy/{id}','LinkController@destroy')->name('admin.link.destroy');
});
