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
        'hipertensao', 
        'diabete', 
        'altura',
        'imc',
        'peso',
        'pref_alimentar', 
        'intolerancia',
        'aversoes'
    ];

    public function setCategoryAttributes($value){
        $this->attributes['hipertensao'] = json_encode($value);
        $this->attributes['diabete'] = json_encode($value);

    }
    public function getCategoryAttribute($value)
    {
        return $this->attributes['hipertensao'] = json_decode($value);
        return $this->attributes['diabete'] = json_decode($value);
    }

    public function paciente(){
        return $this->belongsTo(tbPacientes::class);
    }
}
