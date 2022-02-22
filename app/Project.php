<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','typeproject','dateb','datef','dateentry','surface','description','location','latlon',
    ];
}
