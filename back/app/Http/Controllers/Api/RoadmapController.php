<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Roadmaps\RoadmapResource;
use App\Models\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Roadmap::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|unique:roadmaps,slug',
        ]);

        $roadmap = Roadmap::create($data);

        return response()->json($roadmap, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Roadmap $roadmap)
    {
        $roadmap->load(['steps.cards']);
        return RoadmapResource::make($roadmap);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roadmap $roadmap)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'sometimes|required|string|unique:roadmaps,slug,' . $roadmap->id,
        ]);

        $roadmap->update($data);

        return response()->json($roadmap);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roadmap $roadmap)
    {
        $roadmap->delete();

        return response()->json(null, 204);
    }
}
