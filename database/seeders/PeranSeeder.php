<?php

namespace Database\Seeders;

use App\Models\Peran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peranList = ['admin', 'mahasiswa'];

        foreach ($peranList as $role) {
            Peran::create([
                'nama' => $role,
            ]);
        }
    }
}
