<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
