<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Start_and_end_hours extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'hour',
    ];

    public function scheduleDisciplines()
    {
        return $this->hasMany(Discipline_schedules::class);
    }

    public function typeHour()
    {
        return $this->belongsTo(Type_hours::class, 'typeId', 'id');
    }
}
