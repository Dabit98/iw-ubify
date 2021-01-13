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
    return view('principal.index');

});

Route::get('/home2', function () {
    return view('principal.home2');
})->middleware('auth');

Route::get('Login', function () {
    return view('auth.login');
});

Route::get('Info_proyecto', function () {
    return view('principal.conocenos');
});

Route::get('Contactanos', function () {
    return view('principal.contactanos');
});

Route::get('Superuser', function () {
    return view('principal.superuser');
})->middleware('admin','auth');

Route::get('auth/modificar', function () {
    return view('auth.modificar');
})->middleware('auth');

Route::get('/Conductor', function () {
    return view('principal.home3');
})->middleware('driver');


Route::get('/edit/user/','PruebaController@edit')->name('user.edit');
Route::post('/edit/user/','PruebaController@update')->name('user.update');

Route::middleware('admin')->group(function() {
Route::get('User', 'UserController@list');
Route::get('User/registro', 'UserController@create');
Route::post('User/registro', 'UserController@store');
Route::delete('User/{email}', 'UserController@destroy');
Route::get('/searchNombre', 'UserController@searchNombre');
Route::get('/searchApellidos', 'UserController@searchApellidos');
//para modificar un cliente
Route::get('User/modificar/{email}', 'UserController@edit');
Route::post('User/modificar/{email}', 'UserController@update');

Route::get('Conductores', 'ConductoresController@list');
Route::get('Conductores/registro', 'ConductoresController@create');
Route::post('Conductores/registro', 'ConductoresController@store');
Route::delete('Conductores/{email}', 'ConductoresController@destroy');
Route::get('Conductores/modificar/{email}', 'ConductoresController@edit');
Route::post('Conductores/modificar/{email}', 'ConductoresController@update');

Route::get('Rutas', 'RutasController@list');
Route::get('Rutas/nueva', 'RutasController@create');
Route::post('Rutas/nueva', 'RutasController@store');
Route::delete('Rutas/{id}', 'RutasController@destroy');

Route::get('Vehiculos', 'VehiculosController@list');
Route::delete('Vehiculos/{id}', 'VehiculosController@destroy');
Route::get('Vehiculos/modificar/{codigo}', 'VehiculosController@edit');
Route::post('Vehiculos/modificar/{codigo}', 'VehiculosController@update');


Route::get('Pagos', 'PagosController@list');
Route::delete('Pagos/{id}', 'PagosController@destroy');

});

Route::middleware('driveradmin')->group(function() {
Route::get('Vehiculos/registro', 'VehiculosController@create');
Route::post('Vehiculos/registro', 'VehiculosController@store');
});

Route::get('/transaccion', function () {
    return view('users.transacciones');
})->middleware('cliente');

Route::get('/exito', function () {
    return view('users.exito');
})->middleware('cliente');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::middleware('driver')->group(function() {
Route::get('Vehiculos', 'VehiculosController@list');
Route::delete('Vehiculos/{id}', 'VehiculosController@destroy');
Route::get('Vehiculos/modificar/{codigo}', 'VehiculosController@edit');
Route::post('Vehiculos/modificar/{codigo}', 'VehiculosController@update');
});*/


