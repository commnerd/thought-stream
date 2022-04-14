<?php

namespace App\Http\Controllers\Api;

// Laravel imports
use Illuminate\Http\JsonResponse;

// Project imports
use App\Http\Requests\UpdateThoughtRequest;
use App\Http\Requests\StoreThoughtRequest;
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
        return response()->json(Thought::all()->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThoughtRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreThoughtRequest $request): JsonResponse
    {
        $thought = Thought::create($request->toArray());
        
        return response(201)->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Thought $thought): JsonResponse
    {
        return response()->json($thought->toArray());
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
        $thought->update($request->toArray());
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thought  $thought
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Thought $thought): JsonResponse
    {
        if($thought->destroy()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
