<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id');
            $table->integer('train_id');
            $table->string('from');
            $table->string('destination');
            $table->string('from_code');
            $table->string('destination_code');
            $table->datetime('boarding_time');
            $table->integer('duration');
            $table->integer('eco_seat');
            $table->integer('bus_seat');
            $table->integer('exec_seat');
            $table->string('platform');
            $table->timestamps();

            $table->index('station_id')
                  ->references('id')->on('train_stations')
                  ->onDelete('cascade');
            $table->index('train_id')
                  ->references('id')->on('trains')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_schedules');
    }
}
