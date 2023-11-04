<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Pengguna extends Model
{
    use HasUlids;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'id_peran',
    ];

    public function peran()
    {
        return $this->belongsTo(Peran::class, 'id_peran');
    }
}
