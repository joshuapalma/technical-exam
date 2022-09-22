<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{
    public function getAllTodo()
    {
        $todo = Todo::orderBy('created_at', 'DESC')->paginate(10);
        return compact('todo');
    }

    public function createTodo()
    {
        return compact('companies');
    }

    public function storeTodo($request)
    {
        $result = Todo::insertGetId([
            'title' => $request->title,
            'is_done' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return $result;
    }

    public function showTodo($todo)
    {
        $takenote = Todo::where('id', $todo->id)->first();
        return compact('todo');
    }

    public function editTodo($todo)
    {
        $takenote = Todo::where('id', $todo->id)->first();
        return compact('todo');
    }

    public function updateTodo($todo, $request)
    {
        $result = Todo::where('id', $todo->id)->update([
            'title' => $request->title,
        ]);

        return $result;
    }

    public function deleteTodo($todo)
    {
        return Todo::find($todo->id)->delete();
    }

    public function markDoneTodo($todo)
    {
        $result = Todo::where('id', $todo->id)->update([
            'is_done' => '1'
        ]);

        return $result;
    }
}
