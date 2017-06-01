<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Tamano extends Model
{
    protected $table='tamanos';

    protected $fillable=['name','value','title','text'];

    public $timestamps = false;
}
