<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Usar el Modelo de los Codigos
use App\Models\Codigos;

class GeneralController extends Controller
{
    public function raiz(){
        return redirect()->route('inicio');
    }

    //Función de Inicio o Index
    public function inicio(){
        return view('index');
    }
}
