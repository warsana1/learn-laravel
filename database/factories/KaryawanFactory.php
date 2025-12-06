<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KaryawanFactory extends Factory
{
    protected $model = \App\Models\Karyawan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'posisi' => $this->faker->jobTitle(),
            'gaji' => $this->faker->numberBetween(3000000, 20000000),
        ];
    }
}
