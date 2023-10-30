<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    private $t;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $SuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $Admin = Role::create(['name' => 'Admin']);
        $Customer = Role::create(['name' => 'Customer']);
        $Seller = Role::create(['name' => 'Seller']);
        $SuperAdminPermissions = [
            ['name' => 'User.List', 'guard_name' => 'api'],
            ['name' => 'Admin.List', 'guard_name' => 'api'],
            ['name' => 'Admin.Edit', 'guard_name' => 'api'],
            ['name' => 'Admin.Delete', 'guard_name' => 'api'],
            ['name' => 'Customer.Add', 'guard_name' => 'api'],
            ['name' => 'Customer.Edit', 'guard_name' => 'api'],
            ['name' => 'Customer.Delete', 'guard_name' => 'api'],
            ['name' => 'Customer.List', 'guard_name' => 'api'],
            ['name' => 'Order.Add', 'guard_name' => 'api'],
            ['name' => 'Order.Edit', 'guard_name' => 'api'],
            ['name' => 'Order.Delete', 'guard_name' => 'api'],
            ['name' => 'Order.List', 'guard_name' => 'api'],
            ['name' => 'Product.Add', 'guard_name' => 'api'],
            ['name' => 'Product.Edit', 'guard_name' => 'api'],
            ['name' => 'Product.Delete', 'guard_name' => 'api'],
            ['name' => 'Product.List', 'guard_name' => 'api'],
            ['name' => 'Factor.Add', 'guard_name' => 'api'],
            ['name' => 'Factor.Edit', 'guard_name' => 'api'],
            ['name' => 'Factor.Delete', 'guard_name' => 'api'],
            ['name' => 'Factor.List', 'guard_name' => 'api'],
            ['name' => 'Opportunities.Add', 'guard_name' => 'api'],
            ['name' => 'Opportunities.Edit', 'guard_name' => 'api'],
            ['name' => 'Opportunities.Delete', 'guard_name' => 'api'],
            ['name' => 'Opportunities.List', 'guard_name' => 'api'],
            ['name' => 'Role.Add', 'guard_name' => 'api'],
            ['name' => 'Role.Edit', 'guard_name' => 'api'],
            ['name' => 'Role.Delete', 'guard_name' => 'api'],
            ['name' => 'Role.List', 'guard_name' => 'api'],
        ];

        $SellerPermissions = [
            'Customer.Add',
            'Order.Add',
            'Order.Edit',
            'Order.Delete',
            'Order.List',
            'Product.Add',
            'Product.Edit',
            'Product.Delete',
            'Product.List',
            'Factor.Add',
            'Factor.Edit',
            'Factor.Delete',
            'Factor.List',
            'Opportunities.Add',
            'Opportunities.Edit',
            'Opportunities.Delete',
            'Opportunities.List',
        ];

        $CustomerPermissions = [
            'Order.Add',
            'Order.Edit',
            'Order.Delete',
            'Factor.Add',
            'Factor.Edit',
            'Factor.Delete',
            'Opportunities.List',
        ];


        $AdminPermissions = [
            'Admin.List',
            'Admin.Edit',
            'Admin.Delete',
            'Customer.Add',
            'Customer.Edit',
            'Customer.Delete',
            'Customer.List',
            'Order.Add',
            'Order.Edit',
            'Order.Delete',
            'Order.List',
            'Product.Add',
            'Product.Edit',
            'Product.Delete',
            'Product.List',
            'Factor.Add',
            'Factor.Edit',
            'Factor.Delete',
            'Factor.List',
            'Opportunities.Add',
            'Opportunities.Edit',
            'Opportunities.Delete',
            'Opportunities.List',
        ];

        Permission::insert($SuperAdminPermissions);

        $SuperAdmin->syncPermissions(collect($SuperAdminPermissions)->map(function (array $arr) {
            return $arr['name'];
        })->all());

        $Admin->syncPermissions($AdminPermissions);
        $Seller->syncPermissions($SellerPermissions);
        $Customer->syncPermissions($CustomerPermissions);

    }
}
