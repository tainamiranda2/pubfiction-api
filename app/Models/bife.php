<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bife extends Model
{
    use HasFactory;
    protected $fillable=[
        'cliente_ID', 
        'pratoprincipal',
        'pratoentrada',
        'opcaolanche1',
        'opcaolanche2',
        'opcaolanche3',
        'bebidaA',
        'bebidaB',
        'pratoprincipalQtd',
        'pratoentradaQTD',
        'opcaolanche1QTD',
        'opcaolanche2QTD',
        'opcaolanche3QTD',
        'bebidaAQTD',
        'bebidaBQTD'

    ];
}
