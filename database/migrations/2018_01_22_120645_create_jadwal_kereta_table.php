<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalKeretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_keretas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stasiun_id');
            $table->integer('kereta_id');
            $table->string('dari');
            $table->string('tujuan');
            $table->time('datang');
            $table->time('pergi');
            $table->date('tanggal');
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
        Schema::dropIfExists('jadwal_keretas');
    }
}
