<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbCardapios extends Model
{
    use HasFactory;

    protected $fillable = ['desc_cardapio'];
    public function planos(){

        return $this->belongsToMany(tbPlanos::class, 'tb_planos_cardapios');
    }
}


