<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cucha;
use Auth;

class CuchaController extends Controller
{
    public function store(Request $req){

      $user = Auth::user();
      $datos = $req->input('data');

      $cucha = Cucha::find($user->email);

      if($cucha == null)
        $cucha = new Cucha;

      $cucha->email=$user->email;
      $cucha->tamaño=$datos['tamaño'];
      $cucha->material=$datos['material'];
      $cucha->ventana=$datos['ventana'];
      $cucha->estilo=$datos['estilo'];
      $cucha->colorPared1=$datos['colorPared1'];
      $cucha->colorPared2=$datos['colorPared2'];
      $cucha->forma=$datos['forma'];
      $cucha->colorTecho=$datos['colorTecho'];

      $cucha->save();

      return redirect('/');

    }

    public function recover(){

      $user = Auth::user();
      
      return Cucha::find($user->email);

    }
}
