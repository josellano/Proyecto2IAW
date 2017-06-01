<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pageModel\Tamano;
use App\pageModel\Estilo;
use App\pageModel\Forma;
use App\pageModel\Material;
use App\pageModel\Ventana;
use App\Cucha;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function ppal()
    {
        $tamanos = Tamano::all();
        $estilos = Estilo::all();
        $formas = Forma::all();
        $materiales = Material::all();
        $ventanas = Ventana::all();
        $predeterminados = Cucha::all()->where('predet','>',0);

        return view('index')
        ->with(['tamanos'=>$tamanos,'estilos'=>$estilos,'formas'=>$formas,'materiales'=>$materiales,'ventanas'=>$ventanas, 'predeterminados'=>$predeterminados]);
    }


}
