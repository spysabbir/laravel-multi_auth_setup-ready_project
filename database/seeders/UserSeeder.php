<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'Admin',
                'created_at' => Carbon::now(),
            ],
            // Employee
            [
                'name' => 'Employee',
                'email' => 'employee@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'Employee',
                'created_at' => Carbon::now(),
            ],
            // User
            [
                'name' => 'User',
                'email' => 'user@email.com',
                'password' => Hash::make('12345678'),
                'role' => 'User',
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
