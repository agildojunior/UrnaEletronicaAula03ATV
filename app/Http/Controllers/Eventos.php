<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class Eventos extends Controller
{

    public function cadastrarvoto(Request $request) {    
         
        $candidato = new Candidato;
        if($candidato->validarVoto()){

            Candidato::create([
                'num' => $request->votar
            ]);

            $total22 = Candidato::where('num','22')->count();
            $total33 = Candidato::where('num','33')->count();
            $total44 = Candidato::where('num','44')->count();
        }
        
        return view('resutado', compact('total22','total33','total44'));
        
    }
    
}
