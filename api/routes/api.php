<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('login', 'API\AuthController@nopermission')->name('login');

Route::post('signin', 'API\AuthController@signin');
Route::post('signup', 'API\UserController@register');

Route::get('download', 'API\ImageController@download');

Route::get('restaurants/download/{id}', 'API\RestaurantController@download');
Route::get('products/download/{id}', 'API\ProductController@download');
Route::get('categories/download/{id}', 'API\CategoryController@download');
Route::get('gallery/download/{id}', 'API\GalleryController@download');

Route::get('users', 'API\UserController@index');

Route::middleware('auth:api')->group(function () {
  Route::get('users/{id}', 'API\UserController@show');
  Route::post('users', 'API\UserController@store');
  Route::put('users/{id}', 'API\UserController@update');
  Route::delete('users/{id}', 'API\UserController@destroy');
  Route::post('users/update_device_token', 'API\UserController@updateDeviceToken');
  
  Route::get('categories', 'API\CategoryController@index');
  Route::get('categories/find', 'API\CategoryController@findCategories');
  Route::get('categories/{id}', 'API\CategoryController@show');
  Route::post('categories', 'API\CategoryController@store');
  Route::put('categories/{id}', 'API\CategoryController@update');
  Route::delete('categories/{id}', 'API\CategoryController@destroy');
  Route::post('categories/upload/{id}', 'API\CategoryController@upload');

  Route::get('restaurants', 'API\RestaurantController@index');
  Route::get('restaurants/{id}', 'API\RestaurantController@show');
  Route::get('restaurants/get/info', 'API\RestaurantController@getRestaurant');
  Route::post('restaurants', 'API\RestaurantController@store');
  Route::put('restaurants/{id}', 'API\RestaurantController@update');
  Route::delete('restaurants/{id}', 'API\RestaurantController@destroy');

  Route::get('products', 'API\ProductController@index');
  Route::get('products/find', 'API\ProductController@findProducts');
  Route::get('products/{id}', 'API\ProductController@show');
  Route::post('products', 'API\ProductController@store');
  Route::put('products/{id}', 'API\ProductController@update');
  Route::delete('products/{id}', 'API\ProductController@destroy');
  Route::post('products/upload/{id}', 'API\ProductController@upload');

  Route::get('gallery', 'API\GalleryController@index');
  Route::get('gallery/{id}', 'API\GalleryController@show');
  Route::post('gallery', 'API\GalleryController@store');
  Route::put('gallery/{id}', 'API\GalleryController@update');
  Route::delete('gallery/{id}', 'API\GalleryController@destroy');
  Route::post('gallery/upload/{id}', 'API\GalleryController@upload');

  Route::get('orders', 'API\OrderController@index');
  Route::get('orders/find', 'API\OrderController@findOrders');
  Route::get('orders/{id}', 'API\OrderController@show');
  Route::post('orders', 'API\OrderController@store');
  Route::put('orders/{id}', 'API\OrderController@update');
  Route::delete('orders/{id}', 'API\OrderController@destroy');

  Route::get('contacts', 'API\ContactController@index');
  Route::get('contacts/{id}', 'API\ContactController@show');
  Route::get('contacts/get/info', 'API\ContactController@getContact');
  Route::post('contacts', 'API\ContactController@store');
  Route::put('contacts/{id}', 'API\ContactController@update');
  Route::delete('contacts/{id}', 'API\ContactController@destroy');
});