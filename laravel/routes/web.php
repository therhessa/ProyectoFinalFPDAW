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

Route::get('/','FruteriaController@index')->name('fruteria');

Route::get('/producto', function () {
    return view('producto');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin'], function(){
    Route::get('/administrador','CategoriaController@index');

});

//user
Route::get('/home/configuracion', 'UserController@config')->name('config');
Route::post('/home/user/update', 'UserController@update')->name('user.update');
Route::get('/home/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/home/perfil/{id}', 'UserController@profile')->name('user.profile');

