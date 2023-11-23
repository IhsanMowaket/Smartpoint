<?php

namespace Database\Factories;

use App\Models\SubContractor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SubContractorFactory extends Factory
{
    protected $model = SubContractor::class;

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
            'tax_id' => $this->faker->optional()->numerify('#########'),
            'Bank Name' => $this->faker->name.' bank',
            'iban' => $this->faker->iban(),
            'contracts_agreements' => $this->faker->optional()->text,
            'certifications_qualifications' => $this->faker->optional()->text,
            'work_history' => $this->faker->optional()->text,
            'safety_certifications' => $this->faker->optional()->text,
            'extra_emails' => $this->faker->optional()->safeEmail,
            'notes' => $this->faker->optional()->text,
            'worker_count' => $this->faker->numberBetween(1, 100),
            'outstanding' => $this->faker->randomFloat(2, 0, 10000),
            'user_id' => User::factory(), // Assuming you have a UserFactory
            'is_active' => $this->faker->boolean,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
