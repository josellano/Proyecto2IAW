<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    protected $table='formas';

    protected $fillable=['name','value','title','text'];

    public $timestamps = false;

}
