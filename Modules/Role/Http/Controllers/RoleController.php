<?php

namespace Modules\Role\Http\Controllers;

use App\Http\Requests\AddRoleRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function create(AddRoleRequest $request){



        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'api'
        ]);

        $permissions = $request->permissions;
        $role->permissions()->sync($permissions);

        return response()->json(
            ['message' => 'Role is Add',
                'role' => $role,
                'permissions'=>$permissions
                ]);

    }
    public function edit(AddRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->update([
            'name' => $request->name,
        ]);

        $permissions = $request->permissions;
        $role->permissions()->sync($permissions);

        return response()->json(['message' => 'Role is Edit', 'role' => $role]);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return response()->json(['message' => 'Role is Delete']);
    }

    public function index(){

        $roles = Role::all();
        $permission = Permission::all();

        return response()->json([
            'roles' => $roles,
            'permission' => $permission
        ]);
    }
}
