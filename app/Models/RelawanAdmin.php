<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelawanAdmin extends Model
{
    use HasFactory;

    protected $table = "relawan_admin";
    protected $guarded = ["id"];
    
}
