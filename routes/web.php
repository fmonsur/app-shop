<?php

/*
|--------------------------------------------------------------------------
|RUTAS DE LAS VISTAS 
|--------------------------------------------------------------------------
Las rutas vinculan las vistas con los controladores 
*/

Route::get('/', function () {
    return view('welcome');
});

// Se crean las rutas de autenticacion 
Auth::routes();
// Ruta Get al controlador de la pagina de inicio 
Route::get('/home', 'HomeController@index')->name('home');
