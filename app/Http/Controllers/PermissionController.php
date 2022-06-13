<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Repositories\PermissionRepository;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $repository;
    private $indexRoute ;

    public function __construct(PermissionRepository $repository, $indexRoute = 'permission.index')
    {
        $this->repository = $repository;
        $this->indexRoute = $indexRoute;
    }
    public function index(Request $request){
        $contentData =  $this->repository->search($request);
        return view('permission.index', compact('contentData'));
    }

    public function create(){
        return view('permission.create');
    }

    public function store(CreatePermissionRequest $request)
    {
        $data = $this->repository->create($request);
        return redirect()->route($this->indexRoute)->with('success', 'Successfully Permission Created');
    }

    public function edit($slug){
        $data = $this->repository->get($slug);
        return view('permission.edit', compact( 'data'));
    }

    public function update(UpdatePermissionRequest  $request,$slug)
    {
        $data = $this->repository->update($request, $slug);
        return redirect()->route( $this->indexRoute)->with('success','Successfully Permission Updated');
    }

    public function show($slug)
    {
        $data = $this->repository->get($slug);
        return view('permission.info', compact('data'));
    }

    public function delete($slug){
        $data = $this->repository->get($slug);
        return view('permission.delete', compact( 'data'));
    }

    public function destroy($slug)
    {
        $data = $this->repository->delete($slug);
        return redirect()->route($this->indexRoute)->with('success', 'Permission Deleted Successfully');
    }
}
