<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->numerify('0##########'),
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress,
            'detail' => $this->faker->realText(120),
        ];
    }
}
