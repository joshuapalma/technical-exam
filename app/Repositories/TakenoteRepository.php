<?php

namespace App\Repositories;

use App\Models\Takenote;

class TakenoteRepository
{
    public function getAllTakenote()
    {
        $takenote = Takenote::orderBy('created_at', 'DESC')->paginate(10);
        return compact('takenote');
    }

    public function storeTakenote($request)
    {
        $result = Takenote::insertGetId([
            'title' => $request->title,
            'note' => $request->note,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return $result;
    }

    public function showTakenote($takenote)
    {
        $takenote = Takenote::where('id', $takenote->id)->first();
        return compact('takenote');
    }

    public function editTakenote($takenote)
    {
        $takenote = Takenote::where('id', $takenote->id)->first();
        return compact('takenote');
    }

    public function updateTakenote($takenote, $request)
    {
        $result = Takenote::where('id', $takenote->id)->update([
            'title' => $request->title,
            'note' => $request->note,
        ]);

        return $result;
    }

    public function deleteTakenote($takenote)
    {
        return Takenote::find($takenote->id)->delete();
    }
}
