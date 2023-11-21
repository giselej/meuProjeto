<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nome'=>'João Silva',
            'email'=>'joao.silva@email.com',
            'senha'=>'654321'
        ]);

        Usuario::create([
            'nome'=> 'Jose barbosa',
            'email'=>'jose.barbosa@email.com',
            'senha'=>'123456'
        ]);
    }
}
