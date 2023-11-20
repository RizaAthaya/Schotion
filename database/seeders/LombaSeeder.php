<?php

namespace Database\Seeders;

use App\Models\Lomba;
use App\Models\KategoriLomba;
use Illuminate\Database\Seeder;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriIDs = KategoriLomba::pluck('id_kategori_lomba')->toArray();

        for ($i = 0; $i < 8; $i++) {
            Lomba::create([
                'nama' => 'Lomba ' . ($i + 1),
                'deskripsi' => 'Deskripsi Lomba ' . ($i + 1),
                'tanggal_mulai' => now(),
                'tanggal_berakhir' => now()->addDays(7),
                'penyelenggara' => 'Penyelenggara Lomba ' . ($i + 1),
                'link_gambar' => 'https://example.com/gambar_' . ($i + 1) . '.jpg',
                'id_kategori_lomba' => $kategoriIDs[$i % count($kategoriIDs)],
            ]);
        }
    }
}
