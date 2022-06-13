<?php
namespace App\Repositories;

use App\Models\Permission;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PermissionRepository
{
    private $model;
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->paginate(10);;
    }

    public function search($request)
    {
        if ($request->has('search') && $request->get('search')) {
            $search = $request->get('search');
            $data = $this->model
                ->where('title', 'LIKE', "%$search%")->orderBy('title', 'ASC')
                ->paginate($request->get('per_page') ? $request->get('per_page') : 10);
            return $data->appends(array('search' => $search));
        }
        return $this->all();
    }

    public function create($request): bool
    {
        if ($request->has('title') && $request->get('title')) {
            $this->model->title = $request->title;
        }
        if ($request->has('description') && $request->get('description')) {
            $this->model->description = $request->description;
        }
        if ($request->has('status') && $request->get('status')) {
            $this->model->status = $request->status;
        }
        return $this->model->save();

    }
    public function update($request, $slug)
    {
        $item = $this->model->findBySlug($slug);

        if (!$item) {
            throw new NotFoundHttpException('Permission not found');
        }
        if ($request->has('title') && $request->get('title')) {
            $item->title = $request->title;
        }
        if ($request->has('description') && $request->get('description')) {
            $item->description = $request->description;
        }
        if ($request->has('status') && $request->get('status')) {
            $item->status = $request->status;
        }
        return $item->save();
    }

    public function get($slug)
    {
        $item = $this->model->findBySlug($slug);

        if (!$item) {
            throw new NotFoundHttpException('Permission not Found');
        }
        return $item;
    }
    public function delete($slug)
    {
        $item = $this->model->findBySlug($slug);

        if (!$item) {
            throw new NotFoundHttpException('Permission not found');
        }
        return $item->delete();
    }

}
