<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CitasMedica;

class CitasMedicaController extends Controller
{
    //

    public function getData(Request $request ){
        
        $citasmedica= CitasMedica::all();
        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=> $citasmedica
        ]);
        }
        
        
        
        public function save(Request $request ){

            $cuidado=CitasMedica::create([

                'nombre_de_la_cita' =>$request->nombre_de_la_cita,
                'fecha' =>$request->fecha,
                'hora' =>$request->hora,
                'id_mascotas' =>$request->id_mascotas,
                'id_veterinarios' =>$request->id_veterinarios,
                

            ]);

            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){

                $cuidado=CitasMedica::findOrFail($request->id);

                $cuidado->update([

                    'nombre_de_la_cita'=>$request->nombre_de_la_cita,
                    'fecha'=>$request->fecha,
                    'hora'=>$request->hora,
                    'id_mascotas'=>$request->id_mascotas,
                    'id_veterinarios'=>$request->id_veterinarios,
                ]);

        
                return response()->json([
                'status'=> '200',
                'message'=> 'Actualizado con exitosodddd',
                ]);
                }
        
                public function delete(Request $request ){

                    $cuidado=CitasMedica::findOrFail($request->id);
                    $cuidado->delete();
                    
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }

}
