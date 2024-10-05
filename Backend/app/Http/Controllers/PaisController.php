<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;



class PaisController extends Controller
{
    //Get
 public function getData(Request $request ){
    $pais= Pais::all();
        return response()->json([
        'status'=> '200',
        'message'=> 'Consultado con éxito',
        'result'=> $pais
    ]);
}


    //Save
    public function save(Request $request ){
         $pais= Pais::create([
             'codigo' =>$request->codigo,
            'nombre'  =>$request->nombre,
         ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Guardado con éxito',
        'data'=> $request->nombre,
        'pais' => $pais,
        ]);
    }


    //Put
    public function update(Request $request ){
        $pais=Pais::findOrFail($request-> id);
        $pais->update([
            'codigo'=>$request->codigo,
            'nombre'=>$request->nombre,
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Actualizado con éxito',
        'pais' => $pais,
        ]);
    }


    //Delete
    public function delete(Request $request) {        
            $pais=Pais::findOrFail($request-> id);
            $pais->delete([
            'codigo'=>$request->codigo,
            ]);
            return response()->json([
            'status'=> '204',
            'message'=> 'Eliminado con éxito',
        ]);
    }
}
