<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DefaultSetting;

class DefaultSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DefaultSetting::create([
            'app_name' => 'Default Setting',
            'main_phone' => '01878136530',
            'support_phone' => '01878136530',
            'main_email' => 'info@email.com',
            'support_email' => 'info@email.com',
            'address' => 'Dhaka, Bangladesh',
            'app_url' => 'http://127.0.0.1:8000',
            'time_zone' => 'UTC',
            'favicon' => 'default_favicon.png',
            'logo' => 'default_logo.png',
        ]);
    }
}
