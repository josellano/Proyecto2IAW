<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $table='estilos';

    protected $fillable=['class','name','value','title','text'];

    public $timestamps = false;

}
