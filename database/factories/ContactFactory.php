<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id'=>User::all()->random()->id,
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'company'=>$this->faker->company,
//            'birthday'=>$this->faker->date('d/m/Y'),
            'birthday'=>$this->faker->date,
            'description'=>$this->faker->text('50'),
        ];
    }
}
