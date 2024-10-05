<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
       //Get
public function getData(Request $request ){
        $departamento= Departamento::all();
        return response()->json([
        'status'=> '200',
        'message'=> 'Consultado con éxito',
        'result'=>$departamento
        ]);
    }

        //Save        
  public function save(Request $request ){
        $departamento=Departamento::create([
        'codigo' =>$request->codigo,
        'nombre' =>$request->nombre,
        'id_pais' =>$request->id_pais,
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Guardado con exito',
        'data'=> $request->nombre,
        ]);
    }

        //Put
public function update(Request $request ){
        $departamento=Departamento::findOrFail($request-> id);
        $departamento->update([
        'codigo'=> $request->codigo,
        'nombre'=> $request->nombre,
        'id_pais'=> $request->id_pais,  
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Actualizado con éxito',
         ]);
    }

       //Delete
public function delete(Request $request) {        
        $departamento=Departamento::findOrFail($request-> id);
        $departamento->delete([
        'codigo'=>$request->codigo,
        ]);
        return response()->json([
        'status'=> '204',
        'message'=> 'Eliminado con éxito',
    ]);
    }
}


