<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPesawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pesawats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bandara_id');
            $table->integer('pesawat_id');
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
        Schema::dropIfExists('jadwal_pesawats');
    }
}
