<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use App\Models\KategoriBeasiswa;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriIDs = KategoriBeasiswa::pluck('id_kategori_beasiswa')->toArray();

        for ($i = 0; $i < 5; $i++) {
            Beasiswa::create([
                'nama' => 'Beasiswa ' . ($i + 1),
                'deskripsi' => 'Deskripsi Beasiswa ' . ($i + 1),
                'tanggal_mulai' => now(),
                'tanggal_berakhir' => now()->addDays(30),
                'penyelenggara' => 'Penyelenggara Beasiswa ' . ($i + 1),
                'link_gambar' => 'https://example.com/gambar' . ($i + 1) . '.jpg',
                'id_kategori_beasiswa' => $kategoriIDs[$i % count($kategoriIDs)],
            ]);
        }
    }
}
