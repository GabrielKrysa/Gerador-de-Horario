<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline_schedules extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'disciplineId', 'class', 'teacher', 'studentsCapacity', 'stathourId', 'endHourId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function start_hour()
    {
        return $this->belongsTo(Start_and_end_hours::class, 'startHourId', 'id');
    }

    public function end_hour()
    {
        return $this->belongsTo(Start_and_end_hours::class, 'endHourId', 'id');
    }

    public function discipline()
    {
        return $this->belongsTo(Disciplines::class, 'disciplineId', 'id');
    }

    public function day()
    {
        return $this->belongsTo(Days::class, 'dayId', 'id');
    }
}
