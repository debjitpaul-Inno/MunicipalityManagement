<?php
namespace App\Repositories;

use App\Models\Role;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RoleRepository
{
    private $model;
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
    public function all()
    {
        return $this->model->paginate(10);
    }
    public function search($request)
    {
        if ($request->has('search') && $request->get('search')) {
            $search = $request->get('search');
            $data = $this->model
                ->where('name', 'LIKE', "%$search%")->orderBy('name', 'ASC')
                ->paginate($request->get('per_page') ? $request->get('per_page') : 10);
//              ->paginate(5);

            return $data->appends(array('search' => $search));
        }
        return $this->all();
    }

    public function create($request): bool
    {
        $this->model->name = $request->name;
        $this->model->description = $request->description;
        $this->model->status = $request->status;

        $role = $this->model->save();
        if ($role)
        {
            $this->model->permissions()->attach($request['permission_id']);
        }else{
            throw new \Exception('Roles were not added successfully');
        }
        return $role;
    }
    public function update($request, $slug)
    {
        $item = $this->model->findBySlug($slug);
        if (!$item) {
            throw new NotFoundHttpException();
        }else{
            $item->name = $request->name;
            $item->description = $request->description;
            $item->status = $request->status;
        }
        $role = $item->save();
        if ($role){
           $item->permissions()->sync($request['permission_id']);
        }else{
            throw new \Exception('Roles were not added successfully');
        }
    }

    public function delete($slug)
    {
        $item = $this->model->findBySlug($slug);

        if (!$item) {
            throw new NotFoundHttpException();
        }

        return $item->delete();
    }
    public function get($slug)
    {
        $item = $this->model->findBySlug($slug);

        if (!$item) {
            throw new NotFoundHttpException('Role Not Found');
        }

        return $item;
    }

}
