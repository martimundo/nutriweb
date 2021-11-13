<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbPacientes extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome',
        'genero',
        'email',
        'idade'

    ];

    public function nutricionista(){

        return $this->belongsTo(tbNutricionistas::class);
    }

    public function evolucao(){

        return $this->hasOne(tbEvolucao::class);
    }

    public function evolsemanal()
    {
        return $this->hasMany(tbEvolucoesSemanais::class);
    }
    public function planoscardapios(){

        return $this->hasMany(tbPlanosCardapios::class);
    }

}


