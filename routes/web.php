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
//----------------------Admin Page-------------------------------
Route::group(['prefix'=>'admin'],function (){
//-----------------------User Management------------------------------------
//    Route::get('dashboard', 'UserController@indexDashboard')->name("dashboard");
    Route::group(['prefix'=>'users'],function () {
        Route::get('list', 'UserController@index')->name("users.list");
        Route::get('edit/{id}', 'UserController@edit');
        Route::put('edit/{id}','UserController@update')->name("users.edit");
        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store')->name("users.add");
    });
    //-----------------Category Management-----------------------------------
    Route::group(['prefix'=>'categories'],function (){
        Route::get('list','CategoryController@index');
        Route::get('edit','CategoryController@index');
        Route::get('add','CategoryController@index');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
