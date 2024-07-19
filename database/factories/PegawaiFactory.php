<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    protected $model = Pegawai::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address,
            'telepon' => $this->faker->numberBetween($min = 1000000000, $max = 9999999999),
            'posisi' => $this->faker->jobTitle,
            'departemen' => $this->faker->company,
            'tanggal_lahir' => $this->faker->date,
        ];
    }
}
