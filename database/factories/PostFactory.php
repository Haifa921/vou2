<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'english'=>$this->faker->text(50),
            'arabic'=>$this->faker->text(50),
            'phone'=>$this->faker->text(50),
            'email'=>$this->faker->text(50),
            'orphan_type'=>$this->faker->text(50),
            'amount'=>$this->faker->text(50),
            'branch'=>$this->faker->text(50),
            'id_num'=>$this->faker->text(50),
            'date'=>$this->faker->text(50),

        ];
    }
}
