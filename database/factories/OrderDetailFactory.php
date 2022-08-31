<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,100),
            'order_id' => $this->faker->numberBetween(1,100),
            'quantity' => $this->faker->randomDigit()
        ];
    }
}
