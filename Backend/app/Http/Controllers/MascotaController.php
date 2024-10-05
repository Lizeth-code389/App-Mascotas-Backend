<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    //

    public function getData(Request $request ){

        $mascota= Mascota::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'resul'=> $mascota
        ]);
        }
        
        
        
        public function save(Request $request ){

            $mascota=Mascota::create([
                'nombre' =>$request->nombre,
                 'edad' =>$request->edad,
                 'sexo' =>$request->sexo,
                 'peso' =>$request->peso,
                 'esterilizado' =>$request->esterilizado,
                 'descripcion' =>$request->descripcion,
                 'id_razas' =>$request->id_razas,
             ]);
        

            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){

                $mascota=Mascota::findOrFail($request->id);

                $mascota->update([

                    'nombre' =>$request->nombre,
                    'edad' =>$request->edad,
                    'sexo' =>$request->sexo,
                    'peso' =>$request->peso,
                    'esterilizado' =>$request->esterilizado,
                    'descripcion' =>$request->descripcion,
                    'id_razas'=>$request->id_razas,
            
                ]);

            
                return response()->json([
                'status'=> '200',
                'message'=> 'actualizar',
                ]);
                }
        
                public function delete(Request $request ){

                    $mascota=Mascota::findOrFail($request->id);
                    $mascota->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }
}
