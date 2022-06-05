<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/resutado', function () {
    return view('resutado');
});



Route::post('/cadastrar-voto', function (Request $request) {    
    
    Candidato::create([
        'num' => $request->votar
    ]);
    $total22 = Candidato::where('num','22')->count();
    $total33 = Candidato::where('num','33')->count();
    $total44 = Candidato::where('num','44')->count();
    

    return view('resutado', compact('total22','total33','total44'));
    //return view('resutado');

});