<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriBeasiswa;

class KategoriBeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriList = ['Local', 'Overseas'];

        foreach ($kategoriList as $kategori) {
            KategoriBeasiswa::create([
                'nama' => $kategori,
            ]);
        }
    }
}
