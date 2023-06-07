<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->name,
            'gender'=>$this->faker->numberBetween(0,1),
            'email'=>$this->faker->safeEmail,
            'postcode'=>substr_replace($this->faker->postcode, '-', 3, 0),
            'address'=>$this->faker->address,
            'building_name'=>$this->faker->secondaryAddress,
            'opinion'=>$this->faker->realtext($maxNbChars = 200, $indexSize = 2)

        ];
    }
}
