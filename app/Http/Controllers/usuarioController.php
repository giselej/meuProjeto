<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class usuarioController extends Controller
{
    public function index(){
        $usuarios=Usuario::all();
        return view('usuario.listar')
          ->with('meusUsuarios',$usuarios);

    }
    public function editar($id){
        $usuario = usuario::find($id);
        return view('usuario.editar')->with('usuario',$usuario);


    }
    public function deletar($id){
        $usuario=Usuario::find($id);
        $usuario->delete();

        return redirect()->route('usuarios.listar');

    }

        public function salvar(Request $Request){
            $usuario=new usuario();
            $usuario->nome=$Request->nome;
            $usuario->senha=bcrypt($Request->senha);
            $usuario->email=$Request->email;
            $usuario->save();
            return redirect()->route('usuarios.listar');

        }

        public function criar(){
            return view('usuario.novoUsuario');
        }



        public function atualizar(Request $request,$id){

            $usuario= Usuario::find($id);
            $usuario->nome=$request->nome;
            $usuario->senha=$request->senha;
            $usuario->email=$request->email;
            $usuario->save();


            return redirect()->route('usuarios.listar');

        }
}
