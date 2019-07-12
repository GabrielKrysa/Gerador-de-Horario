<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplineScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class');
            $table->string('teacher');
            $table->integer('studentsCapacity');
            $table->integer('startHourId')->unsigned();
            $table->integer('endHourId')->unsigned();
            $table->integer('disciplineId')->unsigned();
            $table->integer('dayId')->unsigned();

            $table->foreign('startHourId')->references('id')->on('start_and_end_hours');
            $table->foreign('endHourId')->references('id')->on('start_and_end_hours');
            $table->foreign('disciplineId')->references('id')->on('disciplines');
            $table->foreign('dayId')->references('id')->on('days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discipline_schedule');
    }
}
