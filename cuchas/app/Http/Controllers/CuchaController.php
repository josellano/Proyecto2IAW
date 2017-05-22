<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CuchaController extends Controller
{
    public function store(Request $req){
      $str_json = $req->input("strData");
      DB::table('cuchas')->insert($str_json);
    }
}
