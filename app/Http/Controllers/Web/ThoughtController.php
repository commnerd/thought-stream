<?php

namespace App\Http\Controllers\Web;

// Laravel includes
use Illuminate\Http\Response;

// App includes
use App\Http\Requests\StoreThoughtRequest;
use App\Http\Requests\UpdateThoughtRequest;
use App\Models\Thought;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response()->view("thought-stream");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        return response()->view("thought-stream");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThoughtRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThoughtRequest $request): Response
    {
        Thought::create($request->all());
        return response()->redirect(route("thought-stream.create"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function show(Thought $thought): Response
    {
        return response($thought);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function edit(Thought $thought): Response
    {
        return response()->view("thoughts.edit", ["thought" => $thought]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThoughtRequest  $request
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThoughtRequest $request, Thought $thought): Response
    {
        return response($thought->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thought $thought): Response
    {
        return response($thought->delete());
    }
}
