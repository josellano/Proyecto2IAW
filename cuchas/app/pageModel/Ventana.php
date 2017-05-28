<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventana extends Model
{
    protected $table='ventanas';

    protected $fillable=['input','type','name','value','title'];

}
