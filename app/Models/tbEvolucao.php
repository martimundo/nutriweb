<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbEvolucao extends Model
{
    use HasFactory;


    protected $fillable = [
        'dific_alimentar',
        'circ_cintura',
        'circ_quadril',
        'doencas_exist',
        'altura',
        'peso',
        'pref_alimentar',
        'intolerancia',
        'aversoes'
    ];


    public function paciente(){
        return $this->belongsTo(tbPacientes::class);
    }
}
