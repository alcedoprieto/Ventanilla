<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacionsolicitud extends Model
{
     protected $table ='clasificacionsolicitudes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'desclasificacion',
    ];
}
