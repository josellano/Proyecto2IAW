<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamano extends Model
{
    protected $table='tamanos';

    protected $fillable=['input','type','name','value','title'];

}
