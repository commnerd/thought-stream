<?php

namespace App\Http\Controllers\Web;

// Laravel imports
use Illuminate\Http\Response;

// Project imports
use App\Http\Requests\UpdateThoughtRequest;
use App\Http\Requests\StoreThoughtRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThoughtRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThoughtRequest $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function show(Thought $thought): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function edit(Thought $thought): Response
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thought $thought): Response
    {
        //
    }
}
