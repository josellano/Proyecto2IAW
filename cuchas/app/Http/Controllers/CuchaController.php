<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CuchaController extends Controller
{
    public function store(Request $req){
      $str_json = $req->input("strData");
      $str_mail = app('Illuminate\Contracts\Auth\Guard')->user()->__get("email");
      $table_entry = array_merge(['email'=>$str_mail],$str_json);

      $cucha = DB::table('cuchas')
        ->where('email', $str_mail)
        ->first();

      if (is_null($cucha)) {
        DB::table('cuchas')
          ->insert($table_entry);
      }
      else {
        DB::table('cuchas')
          ->where('email', $str_mail)
          ->update($str_json);
      }
    }

    public function recover(){
      $str_mail = app('Illuminate\Contracts\Auth\Guard')->user()->__get("email");
      $cucha = DB::table('cuchas')
        ->where('email', $str_mail)
        ->first();
      return json_encode($cucha);
    }
}
