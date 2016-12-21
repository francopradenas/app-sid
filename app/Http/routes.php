<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('cdi','CdiController');
Route::resource('predios','PredioController');
Route::resource('productores','ProductorController');
Route::resource('servicios','ServicioController');
Route::resource('vehiculos','VehiculoController');
Route::resource('usuarios','UsuarioController');
Route::resource('usuario.servicios','ServicioController')



?>
