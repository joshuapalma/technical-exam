<?php

namespace App\Repository\todo;

use App\Models\todo;


class Eloquenttodo implements todoInterface 
{
    protected $todo;

    public function __construct(todo $todo)
    { 
        $this->todo = $todo;
    }

    public function getAll($select) 
    {
        return $this->todo->select($select);
    }

    public function findById(int $id) 
    {
        return $this->todo->findOrFail($id);
    }

    public function create($request)
    {        
        return $this->todo->create([
            'title' => $request['title'],
            'is_done' => $request['is_done'],
        ]);
    }

    public function update($request, int $id)
    {
        $data = $this->findById($id);
        $data->update([
            'title' => $request['title'],
            'is_done' => $request['is_done'],
        ]);

        return $data;
    }

    public function delete(int $id) 
    {
        return $this->findById($id)->delete();
    }
}