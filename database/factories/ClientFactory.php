<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'contact_firstname' => $this->faker->firstName,
            'contact_lastname' => $this->faker->lastName,
            'position' => $this->faker->jobTitle,
            'web_site' => $this->faker->url,
            'Address_zusatz' => $this->faker->optional()->address,
            'street' => $this->faker->streetAddress,
            'zip_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'tax_id' => $this->faker->numerify('##########'),
            'extra_emails' => $this->faker->email,
            'notes' => $this->faker->realText,
            'outstanding' => $this->faker->randomFloat(2, 0, 1000),
            'user_id' => User::factory(), // Assuming you have a User model and factory.
        ];
    }
}
