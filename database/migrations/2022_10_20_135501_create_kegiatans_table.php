<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
              // $table->foreignId('admin_id')
              $table->foreignId('organisasi_id');
              $table->string('nama_event');
              $table->date('tglmulai_event');
              $table->date('tglberakhir_event');
              $table->text('deskripsi_event');
              $table->string('lokasi_event');
              $table->boolean('status_event');
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
        Schema::dropIfExists('kegiatans');
    }
}
