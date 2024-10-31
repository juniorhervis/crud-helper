<?php

namespace HotelHelper;

class CrudHelper
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function read($id)
    {
        return $this->model::find($id);
    }

    public function update($id, array $data)
    {
        $record = $this->model::find($id);
        if ($record) {
            $record->update($data);
            return $record;
        }
        return null;
    }

    public function delete($id)
    {
        $record = $this->model::find($id);
        return $record ? $record->delete() : false;
    }
}
