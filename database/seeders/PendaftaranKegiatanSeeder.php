<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PendaftaranKegiatan;

class PendaftaranKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PendaftaranKegiatan::create([
           'kegiatan_id'=>3,
           'relawan_id'=>4,
           'tglpendaftaran'=>'2022-01-01'

                
            ]);

    }
}
