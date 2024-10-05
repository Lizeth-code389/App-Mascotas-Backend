<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    //

    public function getData(Request $request ){

        $veterinario= Veterinario::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result'=>  $veterinario
        ]);
        }
        
        
        
        public function save(Request $request ){

            $veterinario=Veterinario::create([
                'nombre' =>$request->nombre,
                 'direccion' =>$request->direccion,
                 'telefono' =>$request->telefono,
                 'descripcion' =>$request->descripcion,
             ]);

        
            return response()->json([
            'status'=> '200',
            'message'=> 'Guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){

                $veterinario= Veterinario::findOrFail($request->id);

                $veterinario->update([
                    'nombre'=>$request->nombre,
                    'direccion'=>$request->direccion,
                    'telefono'=>$request->telefono,
                    'descripcion'=>$request->descripcion,
                    
                ]);
        
                return response()->json([
                'status'=> '200',
                'message'=> 'Actualizado con éxito',
                ]);
                }
        
                public function delete(Request $request ){

                    $veterinario= Veterinario::findOrFail($request->id);
                    $veterinario->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'Eliminado con éxito',
                    ]);
                    }
}
