<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\tbEvolucoesSemanais;

class tbPacientes extends Model
{
    use HasFactory;
    protected $table = 'tb_pacientes';

    protected $fillable = [

        'nome',
        'genero',
        'email',
        'idade',
        'nutri_id',
        'evolseman_id'

    ];

    public function nutricionista(){

        return $this->belongsTo(tbNutricionistas::class, 'nutri_id', 'id');
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


