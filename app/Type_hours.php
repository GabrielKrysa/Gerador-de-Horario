<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_hours extends Model
{
    protected $fillable = [
        'id', 'type',
    ];

    function hours()
    {
        return $this->hasMany(Start_and_end_hours::class);
    }
}
