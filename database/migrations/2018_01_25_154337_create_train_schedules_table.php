<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainSchedulesTable extends Migration
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
            $table->datetime('boarding_time');
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
        Schema::dropIfExists('train_schedules');
    }
}
