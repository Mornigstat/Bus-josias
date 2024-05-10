<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Billets;
use App\Models\Compagnies;

class BilletsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $compagniesIds = Compagnies::pluck('id')->toArray();

        return [
            'numero_matricule' => $this->faker->unique()->numerify('#########'),
            'ville_depart' => $this->faker->city,
            'ville_arrivee' => $this->faker->city,
            'arrets_intermediaires' => $this->faker->paragraph,
            'date_depart' => $this->faker->date(),
            'heure_depart' => $this->faker->time(),
            'prix' => $this->faker->randomFloat(3, 1000, 5000),
            'compagnies_id' => $this->faker->randomElement($compagniesIds),
            'type_bus' => $this->faker->randomElement(['standard', 'luxury']),
            'capacite_bus' => $this->faker->numberBetween(20, 100),
            'equipements' => $this->faker->sentence,
            'restrictions' => $this->faker->sentence,
            'gare_depart' => $this->faker->city,
            'gare_arrivee' => $this->faker->city,
            'lien_google_maps_depart' => $this->faker->url,
            'lien_google_maps_arrivee' => $this->faker->url,
        ];
    }
}
