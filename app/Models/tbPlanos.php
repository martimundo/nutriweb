<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbPlanos extends Model
{
    use HasFactory;

    protected $fillable = ['desc_plano'];
    
    public function cardapios(){

        return $this->belongsToMany(tbCardapios::class, 'tb_planos_cardapios');
    }
}
