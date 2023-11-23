<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task; // Ensure this is pointing to your Task model

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pickup_Location' => $this->faker->address(),
            'pickup_Customer' => $this->faker->company(),
            'delivery_Location' => $this->faker->address(),
            'delivery_Customer' => $this->faker->company(),
            'Sequence' => $this->faker->numberBetween(1, 100),
            'category' => $this->faker->randomElement(['Logistic', 'Security', 'Service']),
            'distance' => $this->faker->numberBetween(10, 1000),
            'note' => $this->faker->optional()->text(),
            'pickup_Time' => $this->faker->time(),
            'pickup_date' => $this->faker->date(),
            'phone_Number' => $this->faker->phoneNumber(),
            // Assuming you have corresponding factories or predefined IDs for these:
            'sub_contractors' => \App\Models\SubContractor::factory(),
            'employee' => \App\Models\Employee::factory(),
            'client' => \App\Models\Client::factory(),
            'status'=>$this->faker->randomElement(['Started', 'Finished', 'in Progress', 'Wait'])
        ];
    }
}
