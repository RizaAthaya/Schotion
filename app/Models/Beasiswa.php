<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Beasiswa extends Model
{
    use HasUlids;

    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'penyelenggara',
        'link_gambar',
        'id_kategori_beasiswa',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBeasiswa::class, 'id_kategori_beasiswa');
    }}
