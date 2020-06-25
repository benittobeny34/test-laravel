<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Yajra\Datatables\Datatables;

use App\Http\Requests\PostValidation;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.users');
    }

    public function allUsers()
    {

        $users = User::all();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="assignroles/' . $user->id . '" class="btn btn-xs btn-primary">roles</a>';
            })->make(true);
    }

    public function viewrole($id)
    {
        return view('admin.createrole')->with('id', $id);
    }

    public function updaterole(Request $request, $id)
    {

        // dd($request->all());
        $request->validate(
            [
                'role' => 'bail|required',
                'permission' => 'required|array|min:1',
                'permission.*' => 'required',
            ]);


        $role = Role::where('name', $request->role)->first();


        if (!$role)
            $role = Role::create(['name' => $request->role]);
        else
            $role = Role::findByName($request->role);


        foreach ($request->permission as $permission) {
            $per = Permission::where('name', $permission)->first();
            if (!$per)
                $per = Permission::create(['name' => $permission]);
            else
                $per = Permission::findByName($permission);

            $role->givePermissionTo($per);
        }

        $user = User::find($id);

        $user->syncPermissions($request->permission);

        $user->syncRoles($request->role);


        return redirect()->back()->with('message', 'Role and Permissions assigned Successfully');
    }
}
