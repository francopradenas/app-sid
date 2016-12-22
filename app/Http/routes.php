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
Route::resource('cdi','CdiController',['except'=>'create','edit']);
Route::resource('predios','PredioController',['except'=>'create','edit']);
Route::resource('productores','ProductorController',['except'=>'create','edit']);
Route::resource('servicios','ServicioController',['except'=>'create','edit']);
Route::resource('vehiculos','VehiculoController',['except'=>'create','edit']);
Route::resource('usuarios','UsuarioController',['except'=>'create','edit']);
Route::resource('usuario.servicios','ServicioController',['except'=>'create','edit'])



?>
