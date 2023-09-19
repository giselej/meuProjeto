<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class usuarioController extends Controller
{
    public function index(){
        $usuarios=Usuario::all();
        return view('listar')
          ->with('meusUsuarios',$usuarios);

    }
    public function show($id){
        return Usuario::find($id);

    }
    public function delete($id){
        $usuario=Usuario::find($id);

    }
}
