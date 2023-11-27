<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Lomba extends Model
{
    use HasUlids;
    protected $table = 'lomba';
    protected $primaryKey = 'id_lomba';
    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'penyelenggara',
        'link_gambar',
        'id_kategori_lomba',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriLomba::class, 'id_kategori_lomba');
    }
    


}
