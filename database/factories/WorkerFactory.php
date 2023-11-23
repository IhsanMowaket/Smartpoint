<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class WorkerFactory extends Factory
{
    protected $model = Worker::class;

    public function definition(): array
    {
        return [
                'company' => $this->faker->company,
                'firstname' => $this->faker->firstName,
                'lastname' => $this->faker->lastName,
                'gender' => $this->faker->randomElement(['male', 'female']),
                'Address_zusatz' => $this->faker->optional()->secondaryAddress,
                'street' => $this->faker->streetAddress,
                'zip_code' => $this->faker->postcode,
                'city' => $this->faker->city,
                'date_of_birth' => $this->faker->date,
                'place_of_birth' => $this->faker->city,
                'id_card' => $this->faker->uuid,
                'driver_license' => $this->faker->uuid,
                'nationality' => $this->faker->country,
                'user_id' => \App\Models\User::factory(), // Assumes that you have a UserFactory
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
