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

Route::group(['middleware' => 'auth'], function(){
  Route::get('community/create', 'CommunityController@add');
  Route::post('community/create', 'CommunityController@create');
  Route::get('community', 'CommunityController@index');
  Route::get('community/edit', 'CommunityController@edit');
  Route::post('community/edit', 'CommunityController@update');
  Route::get('community/delete', 'CommunityController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CommunityController@toppage');
