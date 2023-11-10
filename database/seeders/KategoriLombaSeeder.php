<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriLomba;

class KategoriLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriList = ['Technology', 'Paper', 'Business', 'Public Speaking'];

        foreach ($kategoriList as $kategori) {
            KategoriLomba::create([
                'nama' => $kategori,
            ]);
        }
    }
}
