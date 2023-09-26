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

        $SuperAdmin = Role::create(['name' => 'SuperAdmin','guard_name' => 'api']);
        $Admin = Role::create(['name' => 'Admin','guard_name' => 'api']);
        $Customer = Role::create(['name' => 'Customer','guard_name' => 'api']);
        $SuperAdminPermissions = [
            ['name'=>'ListUser', 'guard_name' => 'api'],
            ['name'=>'AddCustomer', 'guard_name' => 'api'],
            ['name'=>'EditCustomer', 'guard_name' => 'api'],
            ['name'=>'DeleteCustomer', 'guard_name' => 'api'],
            ['name'=>'ListCustomer', 'guard_name' => 'api'],
            ['name'=>'AddOrder', 'guard_name' => 'api'],
            ['name'=>'EditOrder', 'guard_name' => 'api'],
            ['name'=>'DeleteOrder', 'guard_name' => 'api'],
            ['name'=>'ListOrder', 'guard_name' => 'api'],
            ['name'=>'AddProduct', 'guard_name' => 'api'],
            ['name'=>'EditProduct', 'guard_name' => 'api'],
            ['name'=>'DeleteProduct', 'guard_name' => 'api'],
            ['name'=>'ListProduct', 'guard_name' => 'api'],
            ['name'=>'AddFactor', 'guard_name' => 'api'],
            ['name'=>'EditFactor', 'guard_name' => 'api'],
            ['name'=>'DeleteFactor', 'guard_name' => 'api'],
            ['name'=>'ListFactor', 'guard_name' => 'api'],
            ['name'=>'AddOpportunities', 'guard_name' => 'api'],
            ['name'=>'EditOpportunities', 'guard_name' => 'api'],
            ['name'=>'DeleteOpportunities', 'guard_name' => 'api'],
            ['name'=>'ListOpportunities', 'guard_name' => 'api'],
        ];

        $AdminPermissions = [
            'AddCustomer',
            'EditCustomer',
            'DeleteCustomer',
            'ListCustomer',
            'AddOrder',
            'EditOrder',
            'DeleteOrder',
            'ListOrder',
            'AddProduct',
            'EditProduct',
            'DeleteProduct',
            'ListProduct',
            'AddFactor',
            'EditFactor',
            'DeleteFactor',
            'ListFactor',
            'AddOpportunities',
            'EditOpportunities',
            'DeleteOpportunities',
            'ListOpportunities',
        ];

        $CustomerPermissions = [
            'AddOrder',
            'EditOrder',
            'DeleteOrder',
            'AddFactor',
            'EditFactor',
            'DeleteFactor',
            'ListOpportunities',
        ];

        Permission::insert($SuperAdminPermissions);

        $SuperAdmin->syncPermissions(collect($SuperAdminPermissions)->map(function (array $arr){
            return $arr['name'];
        })->all());

        $Admin->syncPermissions($AdminPermissions);

        $Customer->syncPermissions($CustomerPermissions);

    }
}
