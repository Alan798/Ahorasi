<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function fFormulario(){
        return view('formulario');
    }

    function fConsultas(){
        return view('Consultas');
    }


    
    public function procesarRecuerdos (validadorForm1 $req){
    
    return redirect('/')->with('confirmacion','tu recuerdo llego al controlador');
}

}

