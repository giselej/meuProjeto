<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('usuarios', 'App\Http\Controllers\usuarioController@index');
Route::get('usuario/{id}', 'usuarioController@show');
Route::get('usuario/{id}','App\Http\controllers\UsuarioController@delete');
Route::delete('usuario/{id}','App\Http\controllers\UsuariController@delete');
Route::post('usuario/{id}','App\Http\controllers\UsuariController@delete');
Route::put('usuario/{id}','App\Http\controllers\UsuariController@delete');



