<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','iduser','idproject','position',
    ];
}
