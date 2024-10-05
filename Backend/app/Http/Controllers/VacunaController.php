<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacuna;

class VacunaController extends Controller
{
    //

    public function getData(Request $request ){
        $vacuna= Vacuna::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=> $vacuna
        ]);
        }
        
        
        
        public function save(Request $request ){

            $vacuna= Vacuna::create([
                'nombre' =>$request->nombre,
                 'descripcion_vacuna' =>$request->descripcion_vacuna,
                 
             ]);
        
        
            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){

                $vacuna= Vacuna::findOrFail($request->id);

                $vacuna->update([
                    'nombre'=>$request->nombre,
                    'descripcion_vacuna'=>$request->descripcion_vacuna,
                    
                ]);
        
                return response()->json([
                'status'=> '200',
                'message'=> 'actualizar',
                ]);
                }
        
                public function delete(Request $request ){
        
                    $vacuna= Vacuna::findOrFail($request->id);
                    $vacuna->delete();

                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }


}
