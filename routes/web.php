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
Route::get('/admin/login','AdminController@getlogin')->name('admin.getLogin');
Route::post('/admin/login','AdminController@login')->name('admin.login');
Route::get('/admin/logout','AdminController@logout')->name('admin.logout');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
//-----------------------User Management------------------------------------
    Route::get('/', function () {
        return view('Admin.layouts.index');
    })->name('admin.index');
    Route::group(['prefix'=>'users'],function () {
        Route::get('list', 'UserController@index')->name("users.list");
        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store')->name("users.add");
        Route::get('edit/{user}', 'UserController@edit')->name("users.edit");
        Route::put('edit/{user}','UserController@update')->name("users.update");
        Route::delete('delete/{user}','UserController@destroy')->name("users.destroy");
    });
    //-----------------Category Management-----------------------------------
    Route::group(['prefix'=>'categories'],function (){
        Route::get('list', 'CategoryController@index')->name("categories.list");
        Route::get('add', 'CategoryController@create');
        Route::post('add', 'CategoryController@store')->name("categories.add");
        Route::get('edit/{category}', 'CategoryController@edit')->name("categories.edit");
        Route::put('edit/{category}','CategoryController@update')->name('categories.update');
        Route::delete('delete/{category}','CategoryController@destroy')->name("categories.destroy");

    });
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
