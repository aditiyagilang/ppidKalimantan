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
        // Mengambil data galeri dari database
        $galleries = Gallery::all(); // Anda juga bisa gunakan pagination jika diperlukan

        // Melempar data ke view
        return view('admin.gallery', compact('galleries'));
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
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
        ]);

        // Simpan data galeri
        Gallery::create($request->all());

        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
        ]);

        // Ambil galeri berdasarkan ID
        $gallery = Gallery::findOrFail($id);

        // Perbarui data galeri
        $gallery->update($request->all());

        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Cari galeri berdasarkan ID
        $gallery = Gallery::findOrFail($id);
    
        // Hapus galeri
        $gallery->delete();
    
        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('galleries.index')->with('success', 'Galeri berhasil dihapus.');
    }
    
}
