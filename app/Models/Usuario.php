<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

//    protected $with = ['enderecos'];
    protected $fillable = [
        'nome',
        'email',
    ];

    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}
