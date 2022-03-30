<?php

namespace App\Http\Controllers\Web;

// Laravel includes
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

// App includes
use App\Http\Requests\StoreThoughtRequest;
use App\Http\Requests\UpdateThoughtRequest;
use App\Models\Thought;
use App\Providers\RouteServiceProvider;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response()->view("thought-stream", [
            "thoughts" => Thought::orderBy("created_at", "desc")->get(),
        ]);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreThoughtRequest $request): RedirectResponse
    {
        Thought::create($request->all());
        return response()->redirectTo(RouteServiceProvider::HOME);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateThoughtRequest $request, Thought $thought): RedirectResponse
    {
        $thought->update($request->all());
        return response()->redirectTo(RouteServiceProvider::HOME);
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
