<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKegiatan extends Model
{
    use HasFactory;

    protected $table = "admin_kegiatan";
    protected $guarded = ["id"];
    
}
