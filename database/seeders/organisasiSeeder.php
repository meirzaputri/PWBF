<?php

namespace Database\Seeders;
use App\Models\Organisasi;
use Illuminate\Database\Seeder;

class organisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisasi::create([
            'divisi_id' => 4,
            'nama_organisasi' => 'Indonesia Go Green!',
            'path'=>'img/or5.jpg',
            'alamat_organisasi' => 'Surabaya',
            'email_organisasi' => 'iggreen@gmail.com',
            'notelp_organisasi' => '089765490001',
            'username_organisasi' => 'indogg',
            'password_organisasi' => bcrypt('indogg123')
        ]);
        Organisasi::create([
            'divisi_id' => 5,
            'nama_organisasi' => 'Komunitas Dongeng',
            'path'=>'img/or10.jpg',
            'alamat_organisasi' => 'Surabaya',
            'email_organisasi' => 'komunitasdongeng@gmail.com',
            'notelp_organisasi' => '08222121234',
            'username_organisasi' => 'relindo',
            'password_organisasi' => bcrypt('123')
        ]);
    }
}
