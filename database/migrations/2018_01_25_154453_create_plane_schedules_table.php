<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('airport_id');
            $table->integer('plane_id');
            $table->string('from');
            $table->string('destination');
            $table->integer('eco_seat');
            $table->integer('bus_seat');
            $table->integer('first_seat');
            $table->dateTime('boarding_time');
            $table->string('gate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plane_schedules');
    }
}
