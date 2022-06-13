<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $repository;
    private $indexRoute;
    public function __construct(RoleRepository $repository, $indexRoute = 'role.index')
    {
        $this->repository = $repository;
        $this->indexRoute = $indexRoute;
    }
    public function index(Request $request)
    {
        $roles = $this->repository->search($request);
        return view($this->indexRoute, compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('role.create',compact('permissions'));
    }
    public function store(CreateRoleRequest $request)
    {
        try {
            $data = $this->repository->create($request);
            return redirect()->route('role.index')->with('success','Role Created Successfully');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function show($slug)
    {
        $role = $this->repository->get($slug);
        return view('role.info', compact('role'));
    }

    public function edit($slug)
    {
        $role = $this->repository->get($slug);
        $permissions = Permission::all();
        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, $slug)
    {
        try {

            $role = $this->repository->update($request,$slug);
            return redirect()->route('role.index')->with('success','Role Created Successfully');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function delete($slug)
    {
        $role = $this->repository->get($slug);
        return view('role.delete', compact('role'));
    }
    public function destroy($slug)
    {
        $role = $this->repository->delete($slug);
        return redirect()->route('role.index')->with('success','Role Deleted Successfully');

    }
}
