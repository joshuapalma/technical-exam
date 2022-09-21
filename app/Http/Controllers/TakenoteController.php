<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTakenoteRequests;
use App\Http\Requests\UpdateTakenoteRequests;
use App\Models\Takenote;
use Illuminate\Http\Request;
use App\Repositories\TakenoteRepository;

class TakenoteController extends Controller
{
    public $takenote;

    public function __construct(TakenoteRepository $takenote)
    {
        $this->takenote = $takenote;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->takenote->getAllTakenote();
        return view('take-note.view', $result);
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
    public function store(StoreTakenoteRequests $request)
    {
        $this->takenote->storeTakenote($request);
        return redirect()->route('take-note.index')->with('success', 'Note Created Successfully');
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
    public function update(UpdateTakenoteRequests $request, Takenote $id)
    {
        $this->takenote->updateTakenote($id, $request);
        return redirect()->route('take-note.index')->with('warning', 'Note Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Takenote $id)
    {
        $this->takenote->deleteTakenote($id);
        return redirect()->route('take-note.index')->with('error', 'Note has been deleted successfully');
    }
}
