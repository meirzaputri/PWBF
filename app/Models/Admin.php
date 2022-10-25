<?php

namespace App\Models;

use App\Models\Relawan;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use App\Models\RelawanAdmin;
use App\Models\AdminKegiatan;
use App\Models\AdminOrganisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    public function relawans()
    {
        return $this->belongsToMany(Relawan::class, RelawanAdmin::class);
    }

    public function kegiatans()
    {
        return $this->belongsToMany(Kegiatan::class, AdminKegiatan::class);
    }
    
    public function organisasis()
    {
        return $this->belongsToMany(Organisasi::class, AdminOrganisasi::class);
    }
}
