<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /**
     * Tampilkan halaman utama galeri.
     */
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function photosIndex()
{

    // Ambil data dengan type = 'foto'
    $photos = Gallery::where('type', 'foto')->get();
    // dd($photos);

    // Tampilkan view dengan data foto
    return view('public.galerry.foto', compact('photos'));
}

    public function videosIndex()
{

    // Ambil data dengan type = 'foto'
    $videos = Gallery::where('type', 'video')->get();
    // dd($photos);

    // Tampilkan view dengan data foto
    return view('public.galerry.video', compact('videos'));
}

    public function podcastIndex()
{

    // Ambil data dengan type = 'foto'
    $podcasts = Gallery::where('type', 'podcast')->get();
    // dd($photos);

    // Tampilkan view dengan data foto
    return view('public.galerry.podcast', compact('podcasts'));
}

    public function comicIndex()
{

    // Ambil data dengan type = 'foto'
    $comics = Gallery::where('type', 'comic')->get();
    // dd($photos);

    // Tampilkan view dengan data foto
    return view('public.galerry.comic', compact('comics'));
}


    /**
     * Ambil data untuk DataTables.
     */
    public function show(Request $request)
    {
        $query = Gallery::query();

        return DataTables::of($query)
            ->addColumn('type', function ($gallery) {
                return ucfirst($gallery->type); 
            })
            ->addColumn('actions', function ($gallery) {
                return '<button type="button" class="btn btn-info btn-sm detail-button" 
                                data-id="' . $gallery->id . '" 
                                data-type="' . $gallery->type . '" 
                                data-title="' . $gallery->title . '" 
                                data-description="' . $gallery->description . '" 
                                data-link="' . $gallery->link . '" 
                                data-date="' . $gallery->date . '">
                                Detail
                            </button>
                            <button type="button" class="btn btn-warning btn-sm edit-button" 
                                data-id="' . $gallery->id . '" 
                                data-type="' . $gallery->type . '" 
                                data-title="' . $gallery->title . '" 
                                data-description="' . $gallery->description . '" 
                                data-link="' . $gallery->link . '" 
                                data-date="' . $gallery->date . '">
                                Edit
                            </button>
                            <form action="' . route('gallery.destroy', $gallery->id) . '" method="POST" style="display:inline;" 
                                onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus galeri ini?\')">
                                ' . csrf_field() . '
                                ' . method_field('DELETE') . '
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>';
            })
            ->rawColumns(['type','actions'])
            ->make(true);
    }

    /**
     * Tambahkan galeri baru.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
            'link' => 'required', 
        ]);
    
        $gallery = new Gallery();
        $gallery->type = $request->type;
        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->date = $request->date;
    
        // Periksa tipe dan atur input untuk link
        if ($request->type === 'foto') {
            // Proses gambar jika tipe foto
            if ($request->hasFile('link')) {
                $photo = $request->file('link');
                $photoName = uniqid() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('assets/foto'), $photoName);
                $gallery->link = 'assets/foto/' . $photoName; // Menyimpan nama gambar
            }
        } else {
            // Jika tipe selain foto, simpan link URL
            $gallery->link = $request->link;
        }
    
        // Simpan data galeri
        $gallery->save();
    
        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil disimpan!');
    }
    

public function update(Request $request)
{
    $request->validate([
        'id' => 'required|exists:galleries,id',
        'type' => 'required|string',
        'title' => 'required|string',
        'description' => 'nullable|string',
        'date' => 'nullable|date',
        'link' => 'required', // Link is required for both foto and other types
    ]);

    // Ambil data galeri yang akan diperbarui
    $gallery = Gallery::findOrFail($request->id);
    $gallery->type = $request->type;
    $gallery->title = $request->title;
    $gallery->description = $request->description;
    $gallery->date = $request->date;

    // Periksa tipe dan atur input untuk link
    if ($request->type === 'foto') {
        // Proses gambar jika tipe foto
        if ($request->hasFile('link')) {
            // Hapus file lama jika ada
            if ($gallery->link && file_exists(public_path('assets/foto/' . $gallery->link))) {
                unlink(public_path('assets/foto/' . $gallery->link));
            }

            // Simpan file foto baru
            $photo = $request->file('link');
            $photoName = uniqid() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('assets/foto'), $photoName);
            $gallery->link = $photoName; // Menyimpan nama gambar
        }
    } else {
        // Jika tipe selain foto, simpan link URL
        $gallery->link = $request->link;
    }

    // Simpan perubahan
    $gallery->save();

    return response()->json(['message' => 'Data berhasil diperbarui!']);
}


    /**
     * Hapus galeri.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->back()->with('success', 'Galeri berhasil dihapus.');
    }
}
