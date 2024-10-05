<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Raza;

class RazaController extends Controller
{
    //

    public function getData(Request $request ){

        $raza= Raza::all();

        return response()->json([
        'status'=> '200',
        'message'=> 'data.... Por fin',
        'result' => $raza
        
        ]);
        }
        
        
        
        public function save(Request $request ){

            $raza=Raza::create([
                 'nombre' =>$request->nombre,
             ]);
        
            return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->nombre,
            ]);
            }
        
            public function update(Request $request ){
                $raza= Raza::findOrFail($request->id);

                $raza->update([
                    'nombre'=>$request->nombre,
                    
                ]);
        
                return response()->json([
                'status'=> '200',
                'message'=> 'actualizar',
                ]);
                }
        
                public function delete(Request $request ){

                    $raza= Raza::findOrFail($request->id);
                    $raza->delete();
        
                    return response()->json([
                    'status'=> '200',
                    'message'=> 'eliminar.....',
                    ]);
                    }
}
