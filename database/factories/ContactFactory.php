<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->name(),
     'adress' => $this ->faker->address(),
     'city' => $this ->faker->city(),
     'email' => $this->faker->unique()->safeEmail(),
     'phone' => $this->faker->phoneNumber(),
     'birth' => $this->faker->date('1960-01-01','2000-01-01'),
        ];
    }
}
