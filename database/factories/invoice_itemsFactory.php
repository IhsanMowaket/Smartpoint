<?php

namespace Database\Factories;

use App\Models\Invoices;
use App\Models\invoice_items;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class invoice_itemsFactory extends Factory
{
    protected $model = invoice_items::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->numberBetween(1,10),
            'product_service' => $this->faker->word(),
            'description' => $this->faker->text(),
            'amount' => $this->faker->randomFloat(),
            'unit' => $this->faker->word(),
            'price' => $this->faker->randomFloat(),
            'vat_rate' => $this->faker->randomFloat(),
            'vat' => $this->faker->randomFloat(),
            'discount' => $this->faker->randomFloat(),
            'total' => $this->faker->randomFloat(),
            'invoice_id' =>Invoices::all()->random()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
