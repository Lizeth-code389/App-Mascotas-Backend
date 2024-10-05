<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    //Get
public function getData(Request $request ){
        $municipio= Municipio::all();
        return response()->json([
        'status'=> '200',
        'message'=> 'Consultado con éxito',
        'result'=>$municipio
    ]);
}
        
        
    //Save
public function save(Request $request ){
       $municipio=Municipio::create([
       'codigo'=>$request->codigo,
       'nombre'=>$request->nombre,
       'id_departamentos'=>$request->id_departamentos,
       ]);
       return response()->json([
       'status'=> '200',
       'message'=> 'Guardado con éxito',
       'data'=> $request->nombre,
    ]);
}
        
    //Put
public function update(Request $request ){
        $municipio=Municipio::findOrFail($request-> id);
        $municipio->update([
        'codigo'=> $request->codigo,
        'nombre'=> $request->nombre,
        'id_departamentos' => $request->id_departamentos,
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Actualizado con éxito',
    ]);
}
        

    //Delete
public function delete(Request $request ){
        $municipio=Municipio::findOrFail($request->id);
        $municipio->delete();
        return response()->json([
        'status'=> '204',
        'message'=> 'Eliminado con éxito',
    ]);
}

}
