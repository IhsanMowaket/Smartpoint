<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->jobTitle,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'Address_zusatz' => $this->faker->optional()->streetAddress,
            'street' => $this->faker->streetAddress,
            'zip_code' => $this->faker->numberBetween(11111,99999),
            'city' => $this->faker->city,
            'date_of_birth' => $this->faker->date,
            'place_of_birth' => $this->faker->city,
            'status' => $this->faker->randomElement(['Single', 'Married', 'Widowed', 'Divorced']),
            'id_card' => $this->faker->e164PhoneNumber,
            'nationality' => $this->faker->country,
            'emergency_contact_name' => $this->faker->optional()->name,
            'emergency_contact_phone' => $this->faker->optional()->phoneNumber,
//            'employee_id' => $this->faker->optional()->randomNumber(1000,99999),
            'insurance' => $this->faker->word,
            'insurance_number' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'Social_Security' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'tax_id' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'Num_of_children' => $this->faker->numberBetween(0, 5),
            'tax_class' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'bank_name' => $this->faker->word.' Bank',
            'iban' => $this->faker->iban('DE'),
            'employment_start_date' => $this->faker->optional()->date,
            'employment_end_date' => $this->faker->optional()->date,
            'work_enum' => $this->faker->randomElement(['Part-Time', 'Full-Time', 'Mini_Job', 'Temporary']),
            'Compensation_type' => $this->faker->randomElement(['Hourly Rate', 'Salary']),
            'Compensation_amount' => $this->faker->optional()->randomFloat(2, 2000, 8000),
            'overtime_eligibility' => $this->faker->boolean(50),
            'pto_balance' => $this->faker->optional()->randomFloat(2, 0, 80),
            'absence_history' => json_encode([
                [
                'date'=> $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'reason'=> $this->faker->sentence()
            ],
            [
                'date'=> $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'reason'=> $this->faker->sentence()
            ]
            ]),
            'attendance_records' => json_encode([
                [
                    'date' => $this->faker->dateTimeBetween('-1 week', 'now')->format('Y-m-d'),
                    'time_in' => $this->faker->time(),
                    'time_out' => $this->faker->time(),
                ],
                [
                    'date' => $this->faker->dateTimeBetween('-3 days', 'now')->format('Y-m-d'),
                    'time_in' => $this->faker->time(),
                    'time_out' => $this->faker->time(),
                ],
            ]),

            'work_hours' => $this->faker->numberBetween(150, 250), // Random number of work hours in a month
            'break_schedule' => $this->faker->numberBetween(0, 120), // Random number of break hours in a workday
            'work_days' => $this->faker->numberBetween(18, 25), // Random number of worked days in a month
            'previous_employers' => json_encode([
                [
                    'company_name' => $this->faker->company(),
                    'position' => $this->faker->jobTitle(),
                    'start_date' => $this->faker->dateTimeBetween('-5 years', '-1 year')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                ],
                [
                    'company_name' => $this->faker->company(),
                    'position' => $this->faker->jobTitle(),
                    'start_date' => $this->faker->dateTimeBetween('-10 years', '-5 years')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('-5 years', '-1 year')->format('Y-m-d'),
                ],
                [
                    'company_name' => $this->faker->company(),
                    'position' => $this->faker->jobTitle(),
                    'start_date' => $this->faker->dateTimeBetween('-5 years', '-1 year')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                ],
                [
                    'company_name' => $this->faker->company(),
                    'position' => $this->faker->jobTitle(),
                    'start_date' => $this->faker->dateTimeBetween('-10 years', '-5 years')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('-5 years', '-1 year')->format('Y-m-d'),
                ],
            ]),
            'job_history' => json_encode([
                [
                    'job_title' => $this->faker->jobTitle(),
                    'department' => $this->faker->company(),
                    'start_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                    'responsibilities' => $this->faker->sentences(3),
                ],
                [
                    'job_title' => $this->faker->jobTitle(),
                    'department' => $this->faker->company(),
                    'start_date' => $this->faker->dateTimeBetween('-10 years', '-5 years')->format('Y-m-d'),
                    'end_date' => $this->faker->dateTimeBetween('-5 years', '-1 year')->format('Y-m-d'),
                    'responsibilities' => $this->faker->sentences(3),
                ],
            ]),
            'training_history' => json_encode([
                [
                    'course_name' => $this->faker->sentence(),
                    'provider' => $this->faker->company(),
                    'completion_date' => $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
                ],
                [
                    'course_name' => $this->faker->sentence(),
                    'provider' => $this->faker->company(),
                    'completion_date' => $this->faker->dateTimeBetween('-3 years', '-2 years')->format('Y-m-d'),
                ],
            ]),
            'certifications_qualifications' => json_encode([
                [
                    'name' => $this->faker->jobTitle(),
                    'issuing_authority' => $this->faker->company(),
                    'date_obtained' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                ],
                [
                    'name' => $this->faker->sentence(),
                    'issuing_authority' => $this->faker->company(),
                    'date_obtained' => $this->faker->dateTimeBetween('-8 years', '-5 years')->format('Y-m-d'),
                ],
            ]),
            'monthly_worked_uhr' => $this->faker->randomFloat(2, 0, 200),
            'monthly_planed_uhr' => $this->faker->randomFloat(2, 170, 200),
            'Picture' => $this->faker->imageUrl(200, 200, 'people'),
            'user_id' => User::factory(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
