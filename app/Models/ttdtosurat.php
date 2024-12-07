<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttdtosurat extends Model
{
    use HasFactory;
    public function Anggota(){
        return $this->belongsTo(Anggota::class);
    }
    public function Surat(){
        return $this->belongsTo(Surat::class);
    }
}
