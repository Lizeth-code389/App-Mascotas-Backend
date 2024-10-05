<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    // //Get

    public function getData(Request $request ){

        $propietario= Propietario::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result' =>  $propietario
        ]);
        }
        
         //Save
        
        public function save(Request $request ){


            $propietario=Propietario::create([

                 'nombres' =>$request->nombres,
                 'apellidos' =>$request->apellidos,
                 'telefono' =>$request->telefono,
                 'direccion' =>$request->direccion,
                 'correo_electronico' =>$request->correo_electronico,
                 'torre' =>$request->torre,
                 'apartamento' =>$request->apartamento,
                 'id_barrios' =>$request->id_barrios,
                 'id_mascotas' =>$request->id_mascotas,

             ]);
        
            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        

        //Put

            public function update(Request $request ){
        

                $propietario=Propietario::findOrFail($request->id);

                $propietario->update([
                    
                    'nombres'=> $request->nombres,
                    'apellidos'=> $request->apellidos,
                    'telefono' =>$request->telefono,
                    'direccion' =>$request->direccion,
                    'correo_electronico' =>$request->correo_electronico,
                    'torre' =>$request->torre,
                    'apartamento' =>$request->apartamento,
                    'id_barrios'=>$request->id_barrios,
                    'id_mascotas'=>$request->id_mascotas,

                ]);

                return response()->json([
                'status'=> '200',
                'message'=> 'Actualizado con exito',
                ]);
                }
        
         //Delete
                
                public function delete(Request $request ){

                    $propietario=Propietario::findOrFail($request->id);
                    $propietario->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }
}
