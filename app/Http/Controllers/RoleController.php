<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function AddRole(AddRoleRequest $request){



        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'api'
        ]);

        $permissions = $request->permissions;
        $role->permissions()->sync($permissions);

        return response()->json(
            ['message' => 'Role is Add', 'role' => $role]);

    }
    public function EditRole(AddRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->update([
            'name' => $request->name,
        ]);

        $permissions = $request->permissions;
        $role->permissions()->sync($permissions);

        return response()->json(['message' => 'Role is Edit', 'role' => $role]);
    }

    public function DeleteRole($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return response()->json(['message' => 'Role is Delete']);
    }

    public function ListRole(){

        $roles = Role::all();
        $permission = Permission::all();

        return response()->json([
            'roles' => $roles,
            'permission' => $permission
        ]);
    }
}
