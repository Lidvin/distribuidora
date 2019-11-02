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
    return view('auth.login');
});





//Route::get('/empleados/create', 'EmpleadosController@create');



    Auth::routes();
    Route::resource('empleados', 'EmpleadosController');

       
   Route::get('/home', 'HomeController@index')->name('home');
    
    // Authentication Routes...
  //  Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
 //   Route::post('admin/login', 'Auth\LoginController@login');
 //   Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');


