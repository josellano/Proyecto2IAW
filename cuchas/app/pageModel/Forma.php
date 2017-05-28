<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    protected $table='formas';

    protected $fillable=['input','type','name','value','title'];

}
