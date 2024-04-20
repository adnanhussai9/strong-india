<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Creating admin...');
        $admin = User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('Admin@123')]);
        $admin->assignRole('admin');
        $this->command->info('Creating user...');
        $user = User::create(['name' => 'user', 'email' => 'user@gmail.com', 'password' => Hash::make('User@123')]);
        $user->assignRole('user');
        $this->command->info('Creating agent...');
        $agent = User::create(['name' => 'Agent', 'email' => 'agent@gmail.com', 'password' => Hash::make('Agent@123')]);
        $agent->assignRole('agent');
    }
}
