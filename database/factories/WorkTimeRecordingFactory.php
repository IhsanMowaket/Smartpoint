<?php

namespace Database\Factories;

use App\Models\WorkTimeRecording;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class WorkTimeRecordingFactory extends Factory
{
    protected $model = WorkTimeRecording::class;

    public function definition()
    {
        $start_time = Carbon::instance($this->faker->dateTimeThisYear);
        $end_time = (clone $start_time)->addHours($this->faker->numberBetween(1, 8));

        return [
            'record_date' => $start_time->toDateTimeString(),
            'start_time' => $start_time,
            'end_time' => $end_time,
            'pause_start' => $this->faker->boolean ? $start_time->addHours($this->faker->numberBetween(1, 4)) : null,
            'pause_end' => function (array $attributes) {
                return $attributes['pause_start'] ? (new Carbon($attributes['pause_start']))->addMinutes($this->faker->numberBetween(15, 60)) : null;
            },
            'hours_worked' => $this->faker->randomFloat(2, 0, 8), // Random value between 0 and 8
            'status' => $this->faker->randomElement(['approved', 'not approved', 'pending']),
            'user_id' => \App\Models\User::factory(), // Assuming User factory exists
            'month' => $start_time->month,
            'year' => $start_time->year,
        ];
    }
}
