<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
           'vehicle'=>'Engine',
            'base_price'=>'2000',
            'distance_odds'=>'0.05',
            'time_odds'=>'0.1'

        ]);
        Vehicle::create([
           'vehicle'=>'Machine',
            'base_price'=>'2500',
            'distance_odds'=>'0.1',
            'time_odds'=>'0.2'
        ]);
        Vehicle::create([
           'vehicle'=>'pickup-truck',
            'base_price'=>'3500',
            'distance_odds'=>'0.2',
            'time_odds'=>'0.3'
        ]);
        Vehicle::create([
           'vehicle'=>'Truck',
            'base_price'=>'5000',
            'distance_odds'=>'0.25',
            'time_odds'=>'0.4'
        ]);
    }
}
