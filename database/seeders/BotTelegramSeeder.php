<?php

namespace Database\Seeders;

use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BotTelegramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bot = TelegraphBot::create([
            'token' => env('TELEGRAM_BOT_TOKEN'),
            'name' => 'CRM',
        ]);
    }
}
