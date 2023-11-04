<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class KategoriLomba extends Model
{
    use HasUlids;

    protected $fillable = [
        'nama',
    ];

    public function lomba()
    {
        return $this->hasMany(Lomba::class, 'id_kategori_lomba');
    }
}
