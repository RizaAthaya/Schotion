<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Peran;
use Illuminate\Database\Seeder;

class PenggunaAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $idPeranAdmin = Peran::where('nama', 'admin')->first()->id_peran;
        Pengguna::create([
            'nama_lengkap' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'id_peran' => $idPeranAdmin,
        ]);
    }
}
