<?php

namespace Database\Seeders;
use App\Models\Usuario;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Usuario::first();

        Post::create([
            'usuario_id'=>$user->id,
            'titulo'=>'Post de exemplo',
            'conteudo'=> 'Este é o corpo do post de exemplo.',
        ]);
    }
}
