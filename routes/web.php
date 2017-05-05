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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['as' => 'home.view', 'uses' => 'FrontController@index']);
Route::get('/shirts', ['as' => 'shirts.view', 'uses' => 'FrontController@viewShirts']);
Route::get('/shirt', ['as' => 'shirt.view', 'uses' => 'FrontController@viewShirt']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
return view('admin.index');
});
