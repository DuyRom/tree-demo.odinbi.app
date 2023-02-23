<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModelInstance();
    }

    abstract public function getModelClass();

    public function getModelInstance()
    {
        $class = $this->getModelClass();

        return new $class;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $model = $this->model->findOrFail($id);

        $model->fill($data);
        $model->save();

        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);

        return $model->delete();
    }
}
