<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Ventana extends Model
{
    protected $table='ventanas';

    protected $fillable=['name','value','title','text'];

}
