<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbPacientes extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'genero', 'email','idade'];
}


