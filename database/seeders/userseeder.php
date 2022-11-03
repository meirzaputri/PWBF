<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Andrew Sucipto",
            "alamat"=>
             "Surabaya",
            "email" => "andrew@gmail.com",
            "notelp" => "089778654389",
            "username" => "AndrewScpt",
            "password" => bcrypt("nasigorengjamur"),
            "tgllhr_relawan" => "2003-05-13",
            "usia_relawan" => "19",
            "jk_relawan" => "0",
            "pekerjaan_relawan" => "Mahasiswa",
            "stts_relawan" => "1",
            "level" => "1",
        ]);
        User::create([
            "name"=>"Gissela Yunita",
            "alamat"=> "Surabaya",
            "email" => "gyunita@gmail.com",
            "notelp" => "087654785376",
            "username" => "Gisell",
            "password" => bcrypt("gisel123"),
            "level" => "2",
        ]);
        User::create([
            "name"=>"Kindness Crew",
            "alamat"=> "Surabaya",
            "email" => "kindnesscrew@gmail.com",
            "notelp" => "085436765235",
            "username" => "KindnessCrew",
            "password" => bcrypt("orgkidnesscrew"),
            "level" => "3",
        ]);
    }
}
