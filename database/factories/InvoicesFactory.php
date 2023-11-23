<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Invoices;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InvoicesFactory extends Factory
{
    protected $model = Invoices::class;

    public function definition(): array
    {
        return [
            'invoice_number' => $this->faker->word(),
            'invoice_date' => Carbon::now(),
            'due_date' => Carbon::now(),
            'starting_text' => $this->faker->text(),
            'ending_text' => $this->faker->text(),
            'foot_text' => $this->faker->text(),
            'status' => $this->faker->word(),
            'value_status' => $this->faker->randomNumber(),
            'note' => $this->faker->word(),
            'total_amount' => $this->faker->word(),
            'client_id' => Client::factory(),
            'created_by' => User::factory(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
