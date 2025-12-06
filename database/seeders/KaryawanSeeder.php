<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        // 1 record manual
        Karyawan::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'posisi' => 'Staff IT',
            'gaji' => 6000000,
        ]);

        // 10 record palsu via factory
        Karyawan::factory()->count(10)->create();
    }
}
