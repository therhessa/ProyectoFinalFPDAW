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
//Route::match(['get', 'post'], 'admin/createadmin', 'AdminController@createAdmin')->name('createadmin');
//Route::get('admin/createadmin', 'AdminController@index')->name('createadmin');
Auth::routes();
//administrador
Route::get('createadmin', 'AdminController@create');
Route::post('createadmin', 'AdminController@store');
Route::get('/loginadmin', 'LoginAdminController@create');
Route::post('/loginadmin', 'LoginAdminController@store');
Route::get('/logoutadmin', 'LoginAdminController@destroy');

//Route::match(['get', 'post'], 'admin/createadmin', 'AdminController@createAdmin')->name('createadmin');


Route::get('/home', 'HomeController@index')->name('home');
//Route::match(['get', 'post'], 'admin/createadmin', 'AdminController@createAdmin')->name('createadmin');

//Route::get('/administrador','CategoriaController@index')->name('administrador');
/*
Route::group(['middleware' => 'admin'], function(){
    Route::get('/administrador','CategoriaController@index')->name('administrador');

});
*/
//user
Route::get('/home/configuracion', 'UserController@config')->name('config');
Route::post('/home/user/update', 'UserController@update')->name('user.update');
Route::get('/home/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/home/perfil/{id}', 'UserController@profile')->name('user.profile');

