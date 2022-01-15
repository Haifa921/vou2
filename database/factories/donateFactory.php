<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class donateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->text(50),
            'name'=>$this->faker->text(50),
            'phone'=>$this->faker->text(50),
            'email'=>$this->faker->text(50),
            'amount'=>$this->faker->text(50),
        ];
    }
}
