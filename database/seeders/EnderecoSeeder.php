<?php

namespace Database\Seeders;


use App\Models\Endereco;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::create([
            'nome'=>'Casa Ouro Preto',
            'usuario_id'=>1
        ]);
    }
}
