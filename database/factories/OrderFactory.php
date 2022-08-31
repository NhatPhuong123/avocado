<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->sentence,
            'status' => $this->faker->sentence,
            'user_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
