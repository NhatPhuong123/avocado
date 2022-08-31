<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name, 
            'img' => $this->faker->url, 
            'description' => $this->faker->sentence, 
            'price' => $this->faker->randomFloat, 
            'quantity' => $this->faker->randomDigit, 
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
