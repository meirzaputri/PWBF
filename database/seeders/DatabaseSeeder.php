<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Divisi;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $table->id();
        //     $table->foreignId('divisi_id');
        //     $table->string('nama_organisasi');
        //     $table->string('alamat_organisasi');
        //     $table->string('email_organisasi')->unique();
        //     $table->string('notelp_organisasi', 15);
        //     $table->string('username_organisasi',100)->unique();
        //     $table->string('password_organisasi', 100);
        //     $table->timestamps();

        // $table->id();
        //       // $table->foreignId('admin_id')
        //       $table->foreignId('organisasi_id');
        //       $table->string('nama_event');
        //       $table->date('tglmulai_event');
        //       $table->date('tglberakhir_event');
        //       $table->text('deskripsi_event');
        //       $table->string('lokasi_event');
        //       $table->boolean('status_event');
        //     $table->timestamps();
        // });
 $this->call(RelawanSeeder::class);
    
 
       
    }
}
