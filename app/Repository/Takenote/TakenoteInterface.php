<?php

namespace App\Repository\Takenote;

interface TakenoteInterface 
{
    public function getAll($select);

    public function findById(int $id);

    public function create($request);

    public function update($request, int $id);

    public function delete(int $id);
}