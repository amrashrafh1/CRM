<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class PermissionController
 * @package App\Http\Controllers
 */
class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:permissions-create')->only(['create', 'store']);
        $this->middleware('permission:permissions-update')->only(['edit', 'update']);
        $this->middleware('permission:permissions-delete')->only('destroy');
        $this->middleware('permission:permissions-show')->only(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::latest()->paginate(10);

        return view('Admin.permission.index', compact('permissions'))
            ->with('i', (request()->input('page', 1) - 1) * $permissions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = new Permission();
        $roles = Role::get();
        return view('Admin.permission.create', compact('permission', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(PermissionRequest $request)
    {
        $permission = Permission::create($request->validated());
        $permission->roles()->attach($request->input('role_id'));


        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);

        return view('Admin.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        $roles = Role::get();

        return view('Admin.permission.edit', compact('permission', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {

        $permission->update($request->validated());
        $permission->syncRoles($request->role_id);

        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permission updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id)->delete();

        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permission deleted successfully');
    }
}
