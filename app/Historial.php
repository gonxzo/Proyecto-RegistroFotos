<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'idproject','descripcion',
    ];
}
