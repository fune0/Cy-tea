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

Route::get('/', 'TopController@index');

# Parking情報のルーティング
Route::group(['prefix' => 'parkings'], function()
{
    Route::get('shibuya', 'Parking\ParkingController@index');
    Route::get('shibuya/{id}', 'Parking\ParkingController@show');
    Route::get('shinjuku', 'Parking\ParkingController@index');
});
// Route::get('parkings/{parkings}', 'Parking\ParkingController@show');

# CMS/Adminのprefixルーティング
Route::group(['prefix' => 'admin'], function()
{
    Route::resource('posts', 'Admin\PostsController');
});