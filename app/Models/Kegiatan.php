<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Organisasi;
use App\Models\AdminKegiatan;
use App\Models\PendaftaranKegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class);
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, AdminKegiatan::class);
    }

    public function pendaftarankegiatans()
    {
        return $this->hasMany(PendaftaranKegiatan::class);
    }
    
}

