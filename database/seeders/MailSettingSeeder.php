<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MailSetting;

class MailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MailSetting::create([
            'mailer' => 'smtp',
            'host' => 'host',
            'port' => 'port',
            'username' => 'username',
            'password' => 'password',
            'encryption' => 'tls',
            'from_address' => 'info@gmail.com',
        ]);
    }
}
