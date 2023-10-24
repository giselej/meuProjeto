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



// Route::get('usuarios',
// 'App\Http\Controllers\usuarioController@index');
// Route::get('usuario/{id}',
//  'usuarioController@show');
// Route::get('usuario/{id}',
// 'App\Http\controllers\UsuarioController@delete');
// Route::delete('usuario/{id}','App\Http\controllers\UsuariController@delete');
// Route::post('usuario/{id}','App\Http\controllers\UsuariController@delete');
// Route::put('usuario/{id}','App\Http\controllers\UsuariController@delete');

// Route::post('novo-usuario','app\http\controllers\usuarioController@salvarUsuario');
// Route::post('novo-usuario','app\http\controllers\usuarioController@salvarUsuario');

Route::get('usuarios/novo',
'App\http\Controllers\usuarioController@criar');

Route::get('usuarios',
'App\Http\Controllers\usuarioController@index')
->name('usuarios.listar');

Route::get('usuarios/{id}',
'App\Http\Controllers\usuarioController@mostrar');

Route::get('usuarios/{id}/editar',
'App\Http\Controllers\usuarioController@editar')->name('usuario.editar');

Route::post('usuarios',
'App\Http\Controllers\usuarioController@salvar')
->name('novo-usuario');

Route::put('usuarios/{id}',
'App\Http\Controllers\usuarioController@atualizar')->name('usuario.atualizar');



