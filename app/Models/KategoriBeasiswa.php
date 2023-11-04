<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class KategoriBeasiswa extends Model
{
    use HasUlids;
    // use HasFactory;
    protected $fillable = [
        'nama',
    ];
    public function beasiswa()
    {
        return $this->hasMany(Beasiswa::class, 'id_kategori_beasiswa');
    }
}
