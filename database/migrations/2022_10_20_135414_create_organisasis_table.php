<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisi_id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_organisasi');
            $table->string('path')->nullable();
            $table->string('alamat_organisasi');
            $table->string('email_organisasi');
            $table->string('notelp_organisasi', 15);
            $table->string('username_organisasi',100)->unique();
            $table->string('password_organisasi', 100);
            $table->text('deskripsi_organisasi')->nullable();
            $table->boolean('status_organisasi');
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
        Schema::dropIfExists('organisasis');
    }
}
