<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//Modelo de la Tabla Creada
use App\Models\Catalogo;
//Request del Codigo
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
        $Catalogo = Catalogo::select("*")
            ->where("Codigo", "=", $codigo)
            ->get();
        return view('codigo', ['codigo'=>$codigo, 'Catalogo'=>$Catalogo]);
    }
}
