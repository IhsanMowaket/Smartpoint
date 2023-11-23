<?php

namespace Database\Seeders;
use App\Models\Employee;
use App\Models\SubContractor;
use App\Models\Worker;
use App\Models\WorkTimeRecording;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Client;

class UserClientSeeder extends Seeder
{
    public function run()
    {
        // Seed users
        $users = User::factory()->count(100)->create();
        foreach ($users as $user) {
            if ($user->role == 'Client') {
                Client::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }

        foreach ($users as $user) {
            if ($user->role == 'Employee' || $user->role == 'SuperAdmin'|| $user->role == 'Supervisor' || $user->role == 'Accountant' || $user->role ==  'HR Manager' || $user->role ==  'CRM Manager') {
                Employee::factory()->create([
                    'user_id' => $user->id,
                ]);
                WorkTimeRecording::factory(2)->create([
                    'user_id' => $user->id,
                ]);
            }
        }

        foreach ($users as $user) {
            if ($user->role == 'Worker') {
                Worker::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }

        foreach ($users as $user) {
            if ($user->role == 'Sub-Contractor') {
                SubContractor::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }

    }

}

