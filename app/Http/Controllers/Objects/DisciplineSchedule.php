<?php

namespace App\Http\Controllers\Objects;

class DisciplineSchedule
{

    private $discipline;
    private $startHour;
    private $endHour;
    private $class;
    private $teacher;
    private $capacity;
    private $day;


    public function construct($data)
    {
        $this->setDiscipline($data['selectDiscipline']);
        $this->setStartHour($data['selectStartHour']);
        $this->setEndHour($data['selectEndHour']);
        $this->setClass($data['selectClass']);
        $this->setDay($data['selectDay']);
        $this->setTeacher($data['textTeacher']);
        $this->setCapacity($data['textCapacity']);

    }

    function scheduleHourVerification()
    {
        if ($this->startHour < $this->endHour)
            return true;
        else
            return false;
    }


    /**
     * @return mixed
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param mixed $discipline
     */
    public function setDiscipline($discipline): void
    {
        $this->discipline = $discipline;
    }

    /**
     * @return mixed
     */
    public function getStartHour()
    {
        return $this->startHour;
    }

    /**
     * @param mixed $startHour
     */
    public function setStartHour($startHour): void
    {
        $this->startHour = $startHour;
    }

    /**
     * @return mixed
     */
    public function getEndHour()
    {
        return $this->endHour;
    }

    /**
     * @param mixed $endHour
     */
    public function setEndHour($endHour): void
    {
        $this->endHour = $endHour;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }


    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher): void
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day): void
    {
        $this->day = $day;
    }

}