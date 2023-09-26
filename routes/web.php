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
'app\http\Controllers\usuarioController@criar');

Route::get('usuarios',
'App\Http\Controllers\usuarioController@index')
->name('usuarios.listar');

Route::get('usuarios/{id}',
'app\http\Controllers\usuarioController@mostrar');

Route::get('usuarios/{id}/editar',
'app\http\Controllers\usuarioController@editar');

Route::post('usuarios',
'App\Http\Controllers\usuarioController@salvar');

Route::put('usuarios',
'App\Http\Controllers\usuarioController@atualizar');



