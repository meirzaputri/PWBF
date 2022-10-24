<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatan_id');
            $table->foreignId('relawan_id');
            $table->dateTime('tglpendaftaran');
            $table->char(1);
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
        Schema::dropIfExists('pendaftaran_kegiatans');
    }
}
