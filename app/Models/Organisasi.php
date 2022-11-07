<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Divisi;
use App\Models\Relawan;
use App\Models\Kegiatan;
use App\Models\AdminOrganisasi;
use App\Models\RelawanOrganisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisasi extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function kegiatans()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function relawans()
    {
        return $this->belongsToMany(Relawan::class, RelawanOrganisasi::class);
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, AdminOrganisasi::class);
    }
}