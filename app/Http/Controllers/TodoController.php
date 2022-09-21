<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequests;
use App\Http\Requests\UpdateTodoRequests;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Repositories\TodoRepository;

class TodoController extends Controller
{
    public $todo;

    public function __construct(TodoRepository $todo)
    {
            $this->toido = $todo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoRequests $request)
    {
        $this->todo->storeTodo($request);
        return redirect()->route('todo.index')->with('success', 'Todo Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoRequests $request, $id)
    {
        $this->todo->updateTodo($id, $request);
        return redirect()->route('todo.index')->with('warning', 'Todo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->takenote->deleteTodo($id);
        return redirect()->route('todo.index')->with('error', 'Todo has been deleted successfully');
    }
}
