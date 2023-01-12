<?php

namespace Database\Factories;

use App\Models\Car;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition()
    {
        return [
            'brand'=>$this->faker->name,
            'model'=>$this->faker->firstNameFemale,
            'price'=>random_int(100_000, 4_000_000)
        ];
    }
}
