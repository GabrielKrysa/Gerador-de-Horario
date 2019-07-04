<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchedulesDisciplines extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'discipoineId', 'class','teacher','studentsCapacity','stathourId','endHourId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

}
