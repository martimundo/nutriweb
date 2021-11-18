<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbNutricionistas extends Model
{
    use HasFactory;
    protected $table = 'tb_nutricionistas';

    protected $fillable = [
        'crn',
        'nome',
        'foto'
    ];


    public function pacientes(){
        return $this->hasMany('App\tbPacientes','nutri_id', 'id');
    }
}
