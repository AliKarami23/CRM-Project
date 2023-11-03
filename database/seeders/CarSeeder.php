<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'user_id'=>'1',
            'lag'=>'35.6977277105765',
            'lat'=>'51.43889590856994',
            'Status'=>'ok',
            'location'=>'یاران دریان, Tehran, District 12, Nateqi Street, Tehran Province, 1151713513, Iran',
        ]);
    }
}
