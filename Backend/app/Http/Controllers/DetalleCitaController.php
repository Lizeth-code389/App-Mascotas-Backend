<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetalleCita;


class DetalleCitaController extends Controller
{
    //

    public function getData(Request $request ){

         $detallecita= DetalleCita::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=>$detallecita
        ]);
        }


    public function save(Request $request ){

        $detallecita= DetalleCita::create([
 
            'administrar_medicamento' =>$request->administrar_medicamento,
            'recomendaciones_veterinario' =>$request->recomendaciones_veterinario,
            'proximo_control' =>$request->proximo_control,

              ]);

        return response()->json([
        'status'=> '200',
        'message'=> 'guardado con exito',
        'data'=> $request->nombre,

        ]);
        }


    public function update(Request $request ){

        $detallecita= DetalleCita::findOrFail($request->id);

                $detallecita->update([
                    'cuidado_administrar_medicamento'=>$request->cuidado_administrar_medicamento,
                    'recomendaciones_veterinario'=>$request->recomendaciones_veterinario,
                    'proximo_control'=>$request->proximo_control,
                 
                ]);

        
        return response()->json([
        'status'=> '200',
        'message'=> 'actualizar',
        'data'=> $request->nombre,

         ]);
        }



    public function delete(Request $request ){

        $detallecita= DetalleCita::findOrFail($request->id);
        $detallecita->delete();
        
        return response()->json([
        'status'=> '200',
        'message'=> 'eliminar.....',

        ]);
        }
            



}
