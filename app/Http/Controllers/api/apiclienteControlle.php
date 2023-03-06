<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Models\Modelscliente;

class apiclienteControlle extends Controller
{
    
    public function index()
    {
        return  Modelscliente ::all();
    }

    
    public function store(Request $request)
    {
        return  Modelscliente::create($request->all());
    }

    
    public function show( $id)
    {
        return Modelscliente::findOrfall($id);
    }


    public function update(Request $request,  $id)
    {
        $apicliente= Modelscliente::findOrfall($id);
        $apicliente->update($request->all());
        return $apicliente;
    }

    public function destroy(string $id)
    {
        //
    }
}
