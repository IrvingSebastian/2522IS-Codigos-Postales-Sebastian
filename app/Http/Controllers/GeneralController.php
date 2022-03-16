<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

use App\Http\Requests\CodigoRequest;

class GeneralController extends Controller
{
    //Función raiz del proyecto, redirecciona al Index
    public function raiz(){
        return redirect()->route('index');
    }

    //Función de Inicio o Index
    public function index(){

        return view('index');
    }

    public function codigo(CodigoRequest $request){
        $codigo = $request->get('codigo');

        return view('codigo', ['codigo'=>$codigo]);
    }
}
