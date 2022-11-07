<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relawan;
class RelawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Organisasi::create([
        //     'divisi_id' => 5,
        //     'nama_organisasi' => 'Komunitas Dongeng',
        //     'alamat_organisasi' => 'Surabaya',
        //     'email_organisasi' => 'komunitasdongeng@gmail.com',
        //     'notelp_organisasi' => '08222121234',
        //     'username_organisasi' => 'relindo',
        //     'password_organisasi' => bcrypt('123')
        // ]);
        Relawan::create([
            'nama_relawan'=>'Dea Nabila',
            'tgllahir_relawan'=> '2003-02-27',
            'usia_relawan'=> 19,
            'jk_relawan'=> true,
            'alamat_relawan'=> 'Medayu Utara XII No.5, Rungkut Surabaya',
            'pekerjaan_relawan'=> 'Mahasiswa',
            'notelp_relawan'=>'082330433226',
            'email_relawan'=> 'deanabilahusna@gmail.com',
            'username_relawan'=> 'denabb',
            'password_relawan'=>  bcrypt('1234567'),
            'status_relawan'=> true,
            'level'=> 1,
        ]);

        Relawan::create([
            'nama_relawan'=>'Meirza Putri Liandhie',
            'tgllahir_relawan'=> '2003-05-03',
            'usia_relawan'=> 19,
            'jk_relawan'=> true,
            'alamat_relawan'=> 'Ngagel Jaya Selatan XA, Ngagel, Surabaya',
            'pekerjaan_relawan'=> 'Mahasiswa',
            'notelp_relawan'=>'08123456789',
            'email_relawan'=> 'merzaliandhie@gmail.com',
            'username_relawan'=> 'meirza',
            'password_relawan'=>  bcrypt('1357911'),
            'status_relawan'=> true,
            'level'=> 1,
        ]);
        Relawan::create([
            'nama_relawan'=>'Gamas Namara Akbar',
            'tgllahir_relawan'=> '2000-07-30',
            'usia_relawan'=> 22,
            'jk_relawan'=> false,
            'alamat_relawan'=> 'Sukorambi, Jember',
            'pekerjaan_relawan'=> 'Mahasiswa',
            'notelp_relawan'=>'082345678910',
            'email_relawan'=> 'gamasakbar@gmail.com',
            'username_relawan'=> 'gamas',
            'password_relawan'=>  bcrypt('3007200'),
            'status_relawan'=> true,
            'level'=> 1,
        ]);
        Relawan::create([
            'nama_relawan'=>'Desmona Adelia Camila',
            'tgllahir_relawan'=> '2001-03-03',
            'usia_relawan'=> 21,
            'jk_relawan'=> true,
            'alamat_relawan'=> 'Jakarta',
            'pekerjaan_relawan'=> 'Mahasiswa',
            'notelp_relawan'=>'08124681012',
            'email_relawan'=> 'delaadelia@gmail.com',
            'username_relawan'=> 'della',
            'password_relawan'=>  bcrypt('2001033'),
            'status_relawan'=> true,
            'level'=> 1,
        ]);
    }
}
