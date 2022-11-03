<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        //id 8
        Divisi::create([
            'nama_divisi' => 'Sosial',
            'slug' => 'sosial'
        ]);
    }
}
