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
    #区別一覧ページ
    Route::get('chiyoda', 'Parking\ParkingController@index');
    Route::get('chuo', 'Parking\ParkingController@index');
    Route::get('minato', 'Parking\ParkingController@index');
    Route::get('shinjuku', 'Parking\ParkingController@index');
    Route::get('shibuya', 'Parking\ParkingController@index');
    Route::get('shinagawa', 'Parking\ParkingController@index');
    
    #区別一覧ページ->詳細ページ
    Route::get('chiyoda/{id}', 'Parking\ParkingController@show');
    Route::get('chuo/{id}', 'Parking\ParkingController@show');
    Route::get('minato/{id}', 'Parking\ParkingController@show');
    Route::get('shinjuku/{id}', 'Parking\ParkingController@show');
    Route::get('shibuya/{id}', 'Parking\ParkingController@show');
    Route::get('shinagawa/{id}', 'Parking\ParkingController@show');
});
// Route::get('parkings/{parkings}', 'Parking\ParkingController@show');

# CMS/Adminのprefixルーティング
Route::group(['prefix' => 'admin'], function()
{
    Route::resource('posts', 'Admin\PostsController');
});