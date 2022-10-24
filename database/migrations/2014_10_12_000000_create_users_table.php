<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('notelp', 13);
            $table->string('username')->unique();
            $table->string('password');

            $table->string('tgllhr_relawan')->nullable();
            $table->string('usia_relawan')->nullable();
            $table->boolean('jk_relawan')->nullable();
            $table->string('pekerjaan_relawan')->nullable();
            $table->boolean('stts_relawan')->nullable();
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
        Schema::dropIfExists('users');
    }
}
