<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barrio;

class BarrioController extends Controller
{

            //Get
    public function getData(Request $request ){
        $barrio= Barrio::all();
        return response()->json([
        'status'=> '200',
        'message'=> 'Consultado con éxito',
        'result'=>$barrio
        ]);
        }
        
        
             //Post
        public function save(Request $request ){
        $barrio=Barrio::create([
        'codigo'=> $request->codigo,
        'nombre'=> $request->nombre,
        'id_municipios' => $request->id_municipios,
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Guardado con éxito',
        'data'=> $request->nombre,
        ]);
}
        

            //Put
        public function update(Request $request ){
        $barrio=Barrio::findOrFail($request-> id);
        $barrio->update([
        'codigo'=> $request->codigo,
        'nombre'=> $request->nombre,
        'id_municipios' => $request->id_municipios,
        ]);
        return response()->json([
        'status'=> '200',
        'message'=> 'Actualizado con éxito',
        ]);
        }
        
            //Delete
        public function delete(Request $request ){
        $barrio=Barrio::findOrFail($request->id);
        $barrio->delete();
        return response()->json([
        'status'=> '204',
        'message'=> 'Eliminado con éxito',
        ]);
        }
}
