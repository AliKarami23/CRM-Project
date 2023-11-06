<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $product = Product::factory()->count(12)->create();
//        Customer::factory()->count(10)
//            ->has(Order::factory()->count(5)
//                ->hasAttached($product->skip(0)->take(3)))
//            ->create();
//
        $this->call([
            RolesTableSeeder::class,
            SuperAdminSeeder::class,
            VehicleSeeder::class,
            CarSeeder::class,
            BotTelegramSeeder::class
            ]);
    }
}
