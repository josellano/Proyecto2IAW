<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predeterminado extends Model
{
    protected $table='predeterminados';

    protected $fillable=['button','type','class'];

}
