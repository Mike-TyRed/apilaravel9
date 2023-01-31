<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductsFactory extends Factory
{
 
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2,10,5000)
        ];
    }
}
