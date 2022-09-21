<?php

namespace App\Repositories;

use App\Models\Takenote;

class TakenoteRepository
{
    public function getAllTakenote($request)
    {
        $takenote = Takenote::first()->orderBy('created_at', 'DESC')->paginate(10);
        return compact('takenote');
    }

    public function createTakenote()
    {
        return compact('takenote');
    }

    public function storeTakenote($request)
    {
        
    }

    public function showTakenote($takenote)
    {
        return compact('takenote');
    }

    public function editTakenote($takenote)
    {
        return compact('takenote');
    }

    public function updateTakenote($takenote, $request)
    {
        
    }

    public function deleteTakenote($takenote)
    {
        return Takenote::find($takenote->id)->delete();
    }
}
