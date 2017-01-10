<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('foundation');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/Anexos','Anexos');


Route::get('/CrearAnexos', function () {
    return view('form.nuevoAnexo');
});
