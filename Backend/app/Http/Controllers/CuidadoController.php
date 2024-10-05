<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuidado;

class CuidadoController extends Controller
{
    //


    public function getData(Request $request ){

        $cuidado= Cuidado::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=>$cuidado
        ]);
        }
        
        
        
        public function save(Request $request ){

            $cuidado=Cuidado::create([

                'baño' =>$request->baño,
                'paseo' =>$request->paseo,
                'juegos' =>$request->juegos,
                'baño_corte_de_uñas' =>$request->baño_corte_de_uñas,
                'id_mascotas' =>$request->id_mascotas,

            ]);
        
            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){

                $cuidado=Cuidado::findOrFail($request->id);

                $cuidado->update([

                    'baño' =>$request->baño,
                    'paseo' =>$request->paseo,
                    'juegos' =>$request->juegos,
                    'baño_corte_de_uñas' =>$request->baño_corte_de_uñas,
                    'id_mascotas'=>$request->id_mascotas,
            
                ]);
                
        
                return response()->json([
                'status'=> '200',
                'message'=> 'actualizar',
                ]);
                }
        
                public function delete(Request $request ){

                    $cuidado=Cuidado::findOrFail($request->id);
                    $cuidado->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }
}
