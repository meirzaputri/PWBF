<?php

namespace App\Models;

use App\Models\Organisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function organisasis()
    {
        return $this->hasMany(Organisasi::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
    
}
