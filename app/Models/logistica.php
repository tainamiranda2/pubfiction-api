<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logistica extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome', 
        'cadeirasQTD',
        'convidadosQTD',
        'mesasQTD',
        'clienteID'
    ];
}
