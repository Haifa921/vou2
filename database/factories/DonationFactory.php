<?php

namespace Database\Factories;

use App\Models\DonationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type_id=$this->faker->numberBetween(1,4);
        return [
            'donator_name' => $this->faker->name(),
            'donator_email' => $this->faker->unique()->safeEmail(),
            'donator_number'=>$this->faker->phoneNumber(),
            'donator_address'=>$this->faker->address(),
            'donation_type_id'=>$type_id,
            'amount'=> DonationType::find($type_id)->min_amount
        ];
    }
}
