<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){

        return Usuario::all();

   

    }
    public function show($id){
        return Usuario::find($id);
    }
}
