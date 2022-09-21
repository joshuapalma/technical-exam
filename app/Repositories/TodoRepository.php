<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{
    public function getAllTodo($request)
    {
        $todo = Todo::first()->orderBy('created_at', 'DESC')->paginate(10);
        return compact('todo');
    }

    public function createTodo()
    {
        return compact('companies');
    }

    public function storeTodo($request)
    {
        
    }

    public function showTodo($todo)
    {
        return compact('todo');
    }

    public function editTodo($todo)
    {
        return compact('todo');
    }

    public function updateTodo($todo, $request)
    {
        
    }

    public function deleteTodo($todo)
    {
        return Todo::find($todo->id)->delete();
    }
}
