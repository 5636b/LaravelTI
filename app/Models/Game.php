<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'ano_lancamento',
        'genero',
        'user_id'
    ];

    public function dono()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
