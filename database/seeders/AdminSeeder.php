<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@admin.com',
            'password' => 'superadmin',
            'role' => '1',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
