<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {

        
        $this->call([
           UserClientSeeder::class
        ]);
        $this->call([
            RoleAndPermissionSeeder::class
        ]);
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('super_admin');
        });
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('super_visor');
        });
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('accountant');
        });
        User::factory()->count(4)->create()->each(function ($user){
            $user->assignRole('hr_manager');
        });
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('crm_manager');
        });
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('employee');
        });
        User::factory()->count(1)->create()->each(function ($user){
            $user->assignRole('client');
        });
        User::factory()->count(4)->create()->each(function ($user){
            $user->assignRole('sub');
        });
        User::factory()->count(4)->create()->each(function ($user){
            $user->assignRole('worker');
        });
        \App\Models\Invoices::factory(7)->create();
        \App\Models\invoice_items::factory(400)->create();
        \App\Models\Task::factory()->count(50)->create();
        \App\Models\TaskDetail::factory()->count(30)->create();
    }
}
