<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaruio extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $fillable=[
        'nome',
        'email',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
