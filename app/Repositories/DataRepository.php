<?php

namespace App\Repositories;
use App\Interfaces\DataRepositoryInterface;
use App\Models\Data;

class DataRepository implements DataRepositoryInterface
{
    public function all()
    {
        return Data::all();
    }

    public function create(array $data)
    {
        return Data::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Data::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Data::findOrFail($id);
        $user->delete();
    }

    public function find($id)
    {
        return Data::findOrFail($id);
    }
}
