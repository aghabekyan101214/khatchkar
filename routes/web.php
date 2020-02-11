<?php

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

Route::get('/', 'site\HomeController@index');
Route::get('/shop', 'site\ShopController@index');
Route::get('/about-us', 'site\AboutController@index');
Route::get('/gallery', 'site\GalleryController@index');
Route::get('/contact-us', 'site\ContactController@index');
Route::post('/send-email', 'site\ContactController@sendEmail');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', 'admin\ProductController@index');
    Route::resource('types', 'admin\TypeController');
    Route::resource('products', 'admin\ProductController');
});
