<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_fares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plane_id');
            $table->decimal('eco_seat', 10, 2);
            $table->decimal('bus_seat', 10, 2);
            $table->decimal('first_seat', 10, 2);
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
        Schema::dropIfExists('plane_fares');
    }
}
