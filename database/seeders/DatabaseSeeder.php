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

        Kegiatan::create([
            'organisasi_id' => 1,
            'nama_event' => 'Hari Dongeng',
            'tglmulai_event' => '2022-10-11',
            'tglberakhir_event' => '2022-10-22',
            'deskripsi_event' => 'Kegiatan mendongeng bersama anak-anak di Surabaya guna memperingati Hari Dongeng',
            'lokasi_event' => 'Surabaya',
            'status_event' => true
        ]);

        Kegiatan::create([
            'organisasi_id' => 1,
            'nama_event' => 'Mendongeng Bersama Kak Tasya',
            'tglmulai_event' => '2022-11-11',
            'tglberakhir_event' => '2022-01-22',
            'deskripsi_event' => 'Mendongeng bersama kak Tasya tentang pentingnya pembangunan karakter sejak dini',
            'lokasi_event' => 'Surabaya',
            'status_event' => true
        ]);
        

    

        Divisi::create([
            'nama_divisi' => 'Bencana',
            'slug' => 'bencana'
        ]);

        Divisi::create([
            'nama_divisi' => 'Fauna',
            'slug' => 'fauna'
        ]);

        Divisi::create([
            'nama_divisi' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);

        Divisi::create([
            'nama_divisi' => 'Lingkungan',
            'slug' => 'lingkungan'
        ]);

        Divisi::create([
            'nama_divisi' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);

        Divisi::create([
            'nama_divisi' => 'Pengembangan Masyarakat',
            'slug' => 'pengembangan-masyarakat'
        ]);

        Divisi::create([
            'nama_divisi' => 'Seni dan Budaya',
            'slug' => 'seni-dan-budaya'
        ]);
        //id 1
        Divisi::create([
            'nama_divisi' => 'Bencana',
            'slug' => 'bencana'
        ]);
        //id 2
        Divisi::create([
            'nama_divisi' => 'Fauna',
            'slug' => 'fauna'
        ]);
        //id 3
        Divisi::create([
            'nama_divisi' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        //id 4
        Divisi::create([
            'nama_divisi' => 'Lingkungan',
            'slug' => 'lingkungan'
        ]);
        //id 5
        Divisi::create([
            'nama_divisi' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);
        //id 6
        Divisi::create([
            'nama_divisi' => 'Pengembangan Masyarakat',
            'slug' => 'pengembangan-masyarakat'
        ]);
        //id 7
        Divisi::create([
            'nama_divisi' => 'Seni dan Budaya',
            'slug' => 'seni-dan-budaya'
        ]);
    }
}
