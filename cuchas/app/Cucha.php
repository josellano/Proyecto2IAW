<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucha extends Model
{
    protected $table='cuchas';

    protected $fillable=['email','tamaño','material','ventana','estilo','colorPared1','colorPared2','forma','colorTecho'];

    protected $primaryKey = 'email';
}
