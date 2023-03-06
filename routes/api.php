<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiclienteControlle;
//insto é só um teste

/*Route::get('/clientes',function(){

    return 'funcionando';
});*/

Route::get('/clientes',[apiclienteControlle::class,'index']);
Route::get('/clientes/{id}',[apiclienteControlle::class,'index']);
Route::put('/clientes/{id}',[apiclienteControlle::class,'update']);

Route::post('/clientes',[apiclienteControlle::class,'show']);

//Route::get('/clientes');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});