<?php

namespace App\Http\Controllers;

use App\Models\PostMOM;
use Illuminate\Http\Request;

class PostMOMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostMOM::with('user')->paginate(15);
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'views' => 'integer|min:0',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $post = PostMOM::create($validated);
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = PostMOM::with('user')->findOrFail($id);
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = PostMOM::findOrFail($id);
        
        $validated = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'excerpt' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'views' => 'sometimes|integer|min:0',
            'is_published' => 'sometimes|boolean',
            'published_at' => 'nullable|date',
        ]);

        $post->update($validated);
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = PostMOM::findOrFail($id);
        $post->delete();
        return response()->json(['message' => 'Publicación eliminada correctamente']);
    }
}
