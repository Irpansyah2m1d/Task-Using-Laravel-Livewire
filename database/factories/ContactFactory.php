<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jurusan' => Arr::random(['Teknik Komputer', 'Tekni Mesin', 'Teknik Kimia', 'Teknik Sipil', 'Teknik Elektro']),
            'no_hp' => fake()->phoneNumber(),
            'created_at' => now()
        ];
    }
}
