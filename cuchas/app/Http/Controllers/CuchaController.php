<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App/Cucha as Cucha;

class CuchaController extends Controller
{
    public function store(Request $req){

      $cucha = new Cucha;
      $cucha->create($request->all());
    
  return redirect('/');




    }

    public function recover(){
      $str_mail = app('Illuminate\Contracts\Auth\Guard')->user()->__get("email");
      $cucha = DB::table('cuchas')
        ->where('email', $str_mail)
        ->first();
      return json_encode($cucha);
    }
}
