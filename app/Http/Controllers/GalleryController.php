<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        Gallery::create($request->all());
        return redirect()->route('galleries.index');
    }

    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'link' => 'required|url',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        $gallery->update($request->all());
        return redirect()->route('galleries.index');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index');
    }
}
