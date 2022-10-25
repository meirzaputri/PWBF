<?php

namespace App\Models;

use App\Models\Relawan;
use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PendaftaranKegiatan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function relawan()
    {
        return $this->belongsTo(Relawan::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
