<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';

    protected $fillable = [
        'id',
        'titulo',
        'plataforma',
        'genero',
        'desenvolvedora',
        'data_lancamento'
    ];
}
