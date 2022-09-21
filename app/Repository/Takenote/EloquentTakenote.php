<?php

namespace App\Repository\Takenote;

use App\Models\Takenote;


class EloquentTakenote implements TakenoteInterface 
{
    protected $takenote;

    public function __construct(Takenote $takenote)
    { 
        $this->takenote = $takenote;
    }

    public function getAll($select) 
    {
        return $this->takenote->select($select);
    }

    public function findById(int $id) 
    {
        return $this->takenote->findOrFail($id);
    }

    public function create($request)
    {        
        return $this->takenote->create([
            'title' => $request['title'],
            'note' => $request['note'],
        ]);
    }

    public function update($request, int $id)
    {
        $data = $this->findById($id);
        $data->update([
            'title' => $request['title'],
            'note' => $request['note'],
        ]);

        return $data;
    }

    public function delete(int $id) 
    {
        return $this->findById($id)->delete();
    }
}