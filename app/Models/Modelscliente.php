<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelscliente extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
         'email',
         'celular1',
         'celular2'
    ];
}
//php artisan make:model bife --migrate