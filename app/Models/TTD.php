<?php

namespace App\Models;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class TTD extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
