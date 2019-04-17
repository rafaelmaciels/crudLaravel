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


/* ROTA NATIVA DO LARAVEL
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('home');


// Clientes Controllers Routes
Route::get('/clientes', 'ClientesController@index')->name('home');
Route::get('/clientes/novo', 'ClientesController@novo')->name('home');

// A Rota vai buscar o controller e definir como Index
Route::get('/usuarios', 'UsuariosController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
