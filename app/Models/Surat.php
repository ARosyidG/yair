<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    use HasFactory;
    public function ttdtosurat()
    {
        return $this->hasMany(ttdtosurat::class);
    }
}

