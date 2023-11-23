<?php

namespace Database\Factories;

use App\Models\OneStopTransfer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OneStopTransferFactory extends Factory
{
    protected $model = OneStopTransfer::class;

    public function definition(): array
    {
        return [
            'origen_location' => $this->faker->word(),
            'destination_location' => $this->faker->word(),
            'origen_customer' => $this->faker->word(),
            'destination_customer' => $this->faker->word(),
            'geo' => $this->faker->word(),
            'task_time' => Carbon::now(),
            'end_time' => Carbon::now(),
            'task_status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
