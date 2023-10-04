<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $SuperAdmin = User::create([
            'id' => 1,
            'Role' => 'SuperAdmin',
            'Email' => 'ali@gmail.com',
            'PhoneNumber' => '0912',
            'Password' => Hash::make('00000000')
        ]);
        $SuperAdmin->assignRole('SuperAdmin');
    }
}
