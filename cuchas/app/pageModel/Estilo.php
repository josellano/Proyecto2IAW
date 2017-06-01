<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $table='estilos';

    protected $fillable=['type','name','value','title','text'];

}
