<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $SuperAdmin = Role::create(['name' => 'SuperAdmin',]);
        $Admin = Role::create(['name' => 'Admin']);
        $Customer = Role::create(['name' => 'Customer']);
        $SuperAdminPermissions = [
            ['name'=>'Login', 'guard_name' => 'web'],
            ['name'=>'Logout', 'guard_name' => 'web'],
            ['name'=>'SingUp', 'guard_name' => 'web'],
            ['name'=>'ListUser', 'guard_name' => 'web'],
            ['name'=>'AddCustomer', 'guard_name' => 'web'],
            ['name'=>'EditCustomer', 'guard_name' => 'web'],
            ['name'=>'DeleteCustomer', 'guard_name' => 'web'],
            ['name'=>'ListCustomer', 'guard_name' => 'web'],
            ['name'=>'AddOrder', 'guard_name' => 'web'],
            ['name'=>'EditOrder', 'guard_name' => 'web'],
            ['name'=>'DeleteOrder', 'guard_name' => 'web'],
            ['name'=>'ListOrder', 'guard_name' => 'web'],
            ['name'=>'AddProduct', 'guard_name' => 'web'],
            ['name'=>'EditProduct', 'guard_name' => 'web'],
            ['name'=>'DeleteProduct', 'guard_name' => 'web'],
            ['name'=>'ListProduct', 'guard_name' => 'web'],
            ['name'=>'AddFactor', 'guard_name' => 'web'],
            ['name'=>'EditFactor', 'guard_name' => 'web'],
            ['name'=>'DeleteFactor', 'guard_name' => 'web'],
            ['name'=>'ListFactor', 'guard_name' => 'web'],
            ['name'=>'AddOpportunities', 'guard_name' => 'web'],
            ['name'=>'EditOpportunities', 'guard_name' => 'web'],
            ['name'=>'DeleteOpportunities', 'guard_name' => 'web'],
            ['name'=>'ListOpportunities', 'guard_name' => 'web'],
        ];

        $AdminPermissions = [
            'Login',
            'Login',
            'Login',
            'Login',
            'Login',
            'Login',
        ];

        $CustomerPermissions = [
            'Login',
            'Login',
            'Login',
            'Login',
            'Login',
            'Login',
        ];

        Permission::insert($SuperAdminPermissions);

        $SuperAdmin->syncPermissions(collect($SuperAdminPermissions)->map(function (array $arr){
            return $arr['name'];
        })->all());

        $Admin->syncPermissions($AdminPermissions);

        $Customer->syncPermissions($CustomerPermissions);

    }
}
