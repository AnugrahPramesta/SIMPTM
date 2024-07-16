<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kecamatan extends Model
{
    protected $fillable = ['nama_kecamatan'];



    use HasFactory;

    public function hipertensi(): HasMany
    {
        return $this->hasMany(Hipertensi::class);
    }
    public function serviks(): HasMany
    {
        return $this->hasMany(KankerServik::class);
    }
    public function diabetes(): HasMany
    {
        return $this->hasMany(Diabetes::class);
    }
    public function gif(): HasMany
    {
        return $this->hasMany(Gif::class);
    }
    public function usiaproduktif(): HasMany
    {
        return $this->hasMany(UsiaProduktif::class);
    }
    public function posbindu(): HasMany
    {
        return $this->hasMany(Posbindu::class);
    }
}
