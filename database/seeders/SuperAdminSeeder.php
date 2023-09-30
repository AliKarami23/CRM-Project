<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::create([
            'id' => 1,
            'Role' => 'SuperAdmin',
            'Email' => 'ali@gmail.com',
            'PhoneNumber' => '0912',
            'Password' => '00000000'
        ]);
    }
}
