<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('admin_id')
            $table->string('nama_relawan');
            $table->date('tgllahir_relawan');
            $table->integer('usia_relawan');
            $table->boolean('jk_relawan');
            $table->string('alamat_relawan');
            $table->string('pekerjaan_relawan');
            $table->string('notelp_relawan',15);
            $table->string('email_relawan')->unique();
            $table->string('username_relawan',100)->unique();
            $table->string('password_relawan', 100);
            $table->boolean('status_relawan');
            $table->integer('level');
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
        Schema::dropIfExists('relawans');
    }
}
