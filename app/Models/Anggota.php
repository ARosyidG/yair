<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function TTD()
    {
        return $this->hasOne(TTD::class);
    }
    public function ttdtosurat()
    {
        return $this->hasMany(ttdtosurat::class);
    }
}
