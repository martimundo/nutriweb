<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbEvolucoesSemanais extends Model
{
    use HasFactory;
    protected $fillable = [
        'circ_cintura', 
        'peso', 
        'circ_quadril',
        'observ'
    ];
    
    public function paciente(){

        return $this->belongsTo(tbPacientes::class);
    }
}
