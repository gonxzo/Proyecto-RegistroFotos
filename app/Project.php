<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','location','latlon',
    ];
}
