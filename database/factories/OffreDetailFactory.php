<?php

namespace Database\Factories;

use App\Models\OffreDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OffreDetail>
 */
class OffreDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "adresse_offre" => fake()->address(),
            "situation_offre" => fake()->randomElement(['Temps Plein', 'Temps partiel']),
            "horaire_offre" => fake()->numberBetween(5000, 30000),
            "salaire_offre" => fake()->numberBetween(5000,  30000),
        ];
    }
}
