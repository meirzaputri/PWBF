<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Organisasi;
use App\Models\RelawanAdmin;
use App\Models\RelawanOrganisasi;
use App\Models\PendaftaranKegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relawan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function admins()
    {
        return $this->belongsToMany(Admin::class, RelawanAdmin::class);
    }

    public function organisasis()
    {
        return $this->belongsToMany(Organisasi::class, RelawanOrganisasi::class);
    }

    public function pendaftarankegiatans()
    {
        return $this->hasMany(PendaftaranKegiatan::class);
    }

}
