<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrganisasi extends Model
{
    use HasFactory;
    protected $table = "admin_organisasi";
    protected $guarded = ["id"];
    }

