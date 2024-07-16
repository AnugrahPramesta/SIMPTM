<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posbindu extends Model
{
    use HasFactory;

    protected $fillable = [
        'kecamatan_id',
        'nama_posbindu',
        'alamat',
        'jadwal',
    ];

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
