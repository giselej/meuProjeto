<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class usuarioController extends Controller
{
    public function index(){
        $usuarios=Usuario::all();
        return view('usuario,listar')
          ->with('meusUsuarios',$usuarios);

    }
    public function editar($id){

      $Usuario::find($id);

    }
    public function delete($id){
        $usuario=Usuario::find($id);
        return view('usuario.editar')
        ->with('usuario',$usuario);

    }

        public function salvar(request $request){
            $usuario=new usuario();
            $usuario->nome=$REQUEST->nome;
            $usuario->senha=bcrypt($REQUEST->senha);
            $usuario->email=$REQUEST->email;
            $usuario->save();

        }

        public function criar(){
            return view('usuario.novoUsuario');
        }

        public function editar(){


        }
        public function atualizar(request $REQUEST,$id){
            $usuario= Usuario::find($id);
            $usuario->nome=$REQUEST->nome;
            $usuario->senha=$REQUEST->senha;
            $usuario->email=$REQUEST->email;
            $usuario->save();

            return redirect()->route('usuario.listar');




}
