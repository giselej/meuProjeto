<?php

namespace Database\Seeders;


use App\Models\Endereco;
use App\Models\Propriedade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropriedadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propriedade::create([
            'nome'=>'Casa',
            'endereco_id'=>1
        ]);
    }
}
