<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisasi;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisasi::create([
            'divisi_id' => 1,
            "path"=> 'img\or1.jpg',
            'nama_organisasi' => 'Solidaritas Relawan Kemanusiaan',
            'alamat_organisasi' => 'Surabaya',
            'email_organisasi' => 'solidaritasrelawan@gmail.com',
            'notelp_organisasi' => '0315465436',
            'username_organisasi' => 'SRK',
            'password_organisasi' => bcrypt('1133557'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 1,
            "path"=> 'img\or2.jpg',
            'nama_organisasi' => 'Rumah Millenials',
            'alamat_organisasi' => 'Jakarta',
            'email_organisasi' => 'rumahmillenials@gmail.com',
            'notelp_organisasi' => '08765432145',
            'username_organisasi' => 'RumahMillenials',
            'password_organisasi' => bcrypt('246822'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 1,
            "path"=> 'img\or3.jpg',
            'nama_organisasi' => 'Komunitas Bascomm',
            'alamat_organisasi' => 'Bandung',
            'email_organisasi' => 'bascomm@gmail.com',
            'notelp_organisasi' => '08153759713',
            'username_organisasi' => 'BasComm',
            'password_organisasi' => bcrypt('7547652'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 2,
            "path"=> 'img\or4.jpg',
            'nama_organisasi' => 'Komunitas Relawan Dokter Hewan Indonesia',
            'alamat_organisasi' => 'Bogor',
            'email_organisasi' => 'relawandokterhewanindonesia@gmail.com',
            'notelp_organisasi' => '0811958876',
            'username_organisasi' => 'Relawan Dokter Hewan Indonesia',
            'password_organisasi' => bcrypt('234509'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 2,
            "path"=> 'img\or5.jpg',
            'nama_organisasi' => '(Perisai) Pecinta Rimba dan Satwa Liar Indonesia',
            'alamat_organisasi' => 'Probolinggo',
            'email_organisasi' => 'perisai@gmail.com',
            'notelp_organisasi' => '085100647575',
            'username_organisasi' => 'Perisai',
            'password_organisasi' => bcrypt('845757'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 2,
            "path"=> 'img\or6.jpg',
            'nama_organisasi' => 'Kelompok Masyarakat Pengawas (Pokmawas)',
            'alamat_organisasi' => 'Malang',
            'email_organisasi' => 'pokmawas@gmail.com',
            'notelp_organisasi' => '082324252627',
            'username_organisasi' => 'PokMaWas',
            'password_organisasi' => bcrypt('747474'),
            // 'level'=>3,
        ]);  
        Organisasi::create([
            'divisi_id' => 3,
            "path"=> 'img\or7.jpg',
            'nama_organisasi' => 'Komunitas Kesehatan Relawan Indoneia',
            'alamat_organisasi' => 'Jakarta',
            'email_organisasi' => 'kreki@gmail.com',
            'notelp_organisasi' => '031770494949',
            'username_organisasi' => 'KrekI',
            'password_organisasi' => bcrypt('6749378'),
            // 'level'=>3,
        ]);      
        Organisasi::create([
            'divisi_id' => 3,
            "path"=> 'img\or8.jpg',
            'nama_organisasi' => 'Dompet Dhuafa Volunteer',
            'alamat_organisasi' => 'Jakarta',
            'email_organisasi' => 'DompetDhuafaVolunteer@gmail.com',
            'notelp_organisasi' => '089768657432',
            'username_organisasi' => 'DDV',
            'password_organisasi' => bcrypt('894785'),
            // 'level'=>3,
        ]); 
        Organisasi::create([
            'divisi_id' => 5,
            "path"=> 'img\or9.jpg',
            'nama_organisasi' => 'Komunitas Dongeng',
            'alamat_organisasi' => 'Surabaya',
            'email_organisasi' => 'komunitasdongeng@gmail.com',
            'notelp_organisasi' => '08222121234',
            'username_organisasi' => 'relindo',
            'password_organisasi' => bcrypt('123'),
            // 'level'=>3,
        ]);

        Organisasi::create([
            'divisi_id' => 4,
            "path"=> 'img\o10.jpg',
            'nama_organisasi' => 'Indonesia Go Green!',
            'alamat_organisasi' => 'Surabaya',
            'email_organisasi' => 'iggreen@gmail.com',
            'notelp_organisasi' => '089765490001',
            'username_organisasi' => 'indogg',
            'password_organisasi' => bcrypt('indogg123'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 8,
            "path"=> 'img\or3.jpg',
            'nama_organisasi' => 'Pandu Lisane',
            'alamat_organisasi' => 'Jakarta',
            'email_organisasi' => 'pandulisane@gmail.com',
            'notelp_organisasi' => '08123456789',
            'username_organisasi' => 'pandulisane',
            'password_organisasi' => bcrypt('p$nduL1san3'),
            // 'level'=>3,
        ]);
        Organisasi::create([
            'divisi_id' => 6,
            "path"=> 'img\or5.jpg',
            'nama_organisasi' => 'Bee-Youth!',
            'alamat_organisasi' => 'Bekasi',
            'email_organisasi' => 'beyouth@gmail.com',
            'notelp_organisasi' => '0813579753',
            'username_organisasi' => 'beyouth',
            'password_organisasi' => bcrypt('beyouth357'),
            // 'level'=>3,
        ]);
    }
}
