<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $faker = \Faker\Factory::create();
        foreach (range(1,50) as $item){
            DB::table('orders')->insert([
                'product_id'=>$faker->numberBetween(1 , 100),
                'price'=>$faker->numberBetween(5000 , 5000000),
                'description'=>$faker->text(50),
                'user_id'=>$faker->numberBetween(1 , 100),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

        }

    }
}

