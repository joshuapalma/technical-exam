<?php

namespace App\Repository\Todo;

interface TodoInterface 
{
    public function getAll($select);

    public function findById(int $id);

    public function create($request);

    public function update($request, int $id);

    public function delete(int $id);
}