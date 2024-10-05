<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    //

    public function getData(Request $request ){
        $medicamento= Medicamento::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=>  $medicamento
        ]);
        }
        
        
        
        public function save(Request $request ){
        
            $medicamento= Medicamento::create([

                'nombre' =>$request->nombre,
               'horario' =>$request->horario,
               'fecha' =>$request->fecha,
               'composicion_medicamento' =>$request->composicion_medicamento,
               'descripcion' =>$request->descripcion,
            ]);

            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            
            }
        
            public function update(Request $request ){

                $medicamento= Medicamento::findOrFail($request->id);

                $medicamento->update([

                    'nombre'=>$request->nombre,
                    'horario'=>$request->horario,
                    'fecha'=>$request->fecha,
                    'composicion_medicamento'=>$request->composicion_medicamento,
                    'descripcion'=>$request->descripcion,
                
                ]);


                return response()->json([
                'status'=> '200',
                'message'=> 'actualizar',
                ]);
                }
        
                public function delete(Request $request ){

                    $medicamento= Medicamento::findOrFail($request->id);
                    $medicamento->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }
}
