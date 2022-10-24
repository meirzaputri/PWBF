<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Organisasi()
    {
        return $this->hasMany(Organisasi::class);
    }
}
