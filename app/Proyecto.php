<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre','localidad','latlon',
    ];
}
