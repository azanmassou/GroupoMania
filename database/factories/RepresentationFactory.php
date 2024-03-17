<?php

namespace Database\Factories;

use App\Models\Artiste;
use App\Models\Representation;
use App\Models\Salle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Representation>
 */
class RepresentationFactory extends Factory
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
            'salle_id' => Salle::factory()->create(),
            'artiste_id' => Artiste::factory()->create(),
            'DateRepresentation' => fake()->date(),
            'HdebRepresentation' => fake()->time(),
            'HfinRepresentation' => fake()->time(),
        ];
    }
}
