<?php


Route::get('/','PageController@index')->name('index');
Route::get('/category/{id}','PageController@category')->name('category');
Route::get('/product/{product}','PageController@product')->name('product');
Route::get('/compare/{product}/{product2}','PageController@compare')->name('compare');
//----------------------Admin Page-------------------------------
Route::get('/admin/login','AdminController@getlogin')->name('admin.getLogin');
Route::post('/admin/login','AdminController@login')->name('admin.login');
Route::get('/admin/logout','AdminController@logout')->name('admin.logout');
//-----------------------------------------------------------------------------
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');
//-------------------------------------------------------------------------------
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
        Route::delete('delete/{id}','CategoryController@destroy')->name("categories.destroy");
    //---------------------------Product Management--------------------------------------
    });
    Route::group(['prefix'=>'products'],function (){
        Route::get('list', 'ProductController@index')->name("products.list");
        Route::get('add', 'ProductController@create')->name("products.create");
        Route::post('add', 'ProductController@store')->name("products.add");
        Route::get('edit/{product}', 'ProductController@edit')->name("products.edit");
        Route::put('edit/{product}','ProductController@update')->name('products.update');
        Route::delete('delete/{product}','ProductController@destroy')->name("products.destroy");
    });
});
//------------------------------Cart---------------------------------------------------
Route::get('cart', ['as'  => 'getcart', 'uses' =>'PagesController@getcart']);
// them vao gio hang
Route::get('cart/addcart/{id}', ['as'  => 'getcartadd', 'uses' =>'PagesController@addcart']);
Route::get('cart/update/{id}/{qty}-{dk}', ['as'  => 'getupdatecart', 'uses' =>'PagesController@getupdatecart']);
Route::get('cart/delete/{id}', ['as'  => 'getdeletecart', 'uses' =>'PagesController@getdeletecart']);
Route::get('cart/xoa', ['as'  => 'getempty', 'uses' =>'PagesController@xoa']);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
