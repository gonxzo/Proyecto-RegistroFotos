<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idproject','document','description',
    ];
}
