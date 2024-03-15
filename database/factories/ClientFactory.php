<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'entreprise_id' => \App\Models\Entreprise::factory()->create(),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'status' => 2,
        ];
    }
}
