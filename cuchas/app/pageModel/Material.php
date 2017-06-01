<?php

namespace App\pageModel;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='materiales';

    protected $fillable=['name','value','title','text','src'];

}
