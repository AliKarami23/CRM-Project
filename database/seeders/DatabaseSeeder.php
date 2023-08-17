<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $product = Product::factory()->count(12)->create();
        User::factory()->count(10)
                ->has(Order::factory()->count(5)
                ->hasAttached($product->skip(0)->take(3)))
                ->create();
    }


}
