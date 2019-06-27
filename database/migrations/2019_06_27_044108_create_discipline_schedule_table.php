<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplineScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('disciplineId')->unsigned();
            $table->string('class');
            $table->string('teacher');
            $table->integer('studentsCapacity');
            $table->integer('startHourId')->unsigned();
            $table->integer('endHourId')->unsigned();

            $table->foreign('startHourId')->references('id')->on('start_and_end_hours');
            $table->foreign('endHourId')->references('id')->on('start_and_end_hours');
            $table->foreign('disciplineId')->references('id')->on('disciplines');
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
