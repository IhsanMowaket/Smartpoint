<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

 return [
    'company' => $this->faker->randomElement(['LRW Transport & Logistik GmbH', $this->faker->company()]),
    'phone' => $this->faker->unique()->phoneNumber,
     'email' => $this->faker->unique()->safeEmail,
     'login_code' => $this->faker->optional()->numberBetween(111111,999999),
     'field' => $this->faker->randomElement(['Logistic', 'Security', 'Service']),
     'role' => $this->faker->randomElement(['SuperAdmin', 'Supervisor', 'Accountant', 'HR Manager', 'CRM Manager', 'Employee', 'Client', 'Sub-Contractor', 'Worker', 'Visitor']),
     'is_online' => $this->faker->boolean,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
