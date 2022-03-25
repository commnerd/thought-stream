<?php

namespace App\Http\Controllers\Api;

// Laravel includes
use Illuminate\Http\JsonResponse;

// App includes
use App\Http\Requests\StoreThoughtRequest;
use App\Http\Requests\UpdateThoughtRequest;
use App\Models\Thought;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Thought::all());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThoughtRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreThoughtRequest $request): JsonResponse
    {
        return response()->json(Thought::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Thought $thought): JsonResponse
    {
        return response()->json($thought);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThoughtRequest  $request
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateThoughtRequest $request, Thought $thought): JsonResponse
    {
        $thought->update($request->all());
        return response()->json($thought);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Thought $thought): JsonResponse
    {
        $thought->delete();
        return response()->json(null, 204);
    }
}
