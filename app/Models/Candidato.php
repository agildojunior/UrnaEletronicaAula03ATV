<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    

    use HasFactory;
    protected $fillable = ['num'];

    // Disable the model timestamps
    public $timestamps = false;

    public function validarVoto(){

        $candidado = Candidato::all();
        foreach($candidado as $c){
            if($c->num == 22 || $c->num == 33 || $c->num == 44){
                return true;
            }
        }

    }
    
}

