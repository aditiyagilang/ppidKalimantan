<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicInformationController extends Controller
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
        return view('public_information.create');
    }

    /**
     * Menyimpan informasi publik yang baru dibuat.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name_pd_okpd' => 'required|string|max:255',
            'document_name' => 'required|string|max:255',
            'creation_year' => 'required|integer|digits:4',
            'file' => 'required|file|mimes:pdf,docx,xlsx,jpg,png|max:10240', // Max 10MB
        ]);

        // Mengupload file
        $filePath = $request->file('file')->store('public/information_files');

        // Menyimpan data ke dalam database
        PublicInformation::create([
            'name_pd_okpd' => $request->name_pd_okpd,
            'document_name' => $request->document_name,
            'creation_year' => $request->creation_year,
            'file_type' => $request->file('file')->getClientOriginalExtension(),
            'file_size' => $request->file('file')->getSize(),
            'file' => $filePath,
        ]);

        return redirect()->route('public_information.index')->with('success', 'Informasi publik berhasil dibuat!');
    }

    /**
     * Menampilkan detail informasi publik.
     *
     * @param  \App\Models\PublicInformation  $publicInformation
     * @return \Illuminate\View\View
     */
    public function show(PublicInformation $publicInformation)
    {
        return view('public_information.show', compact('publicInformation'));
    }

    /**
     * Menampilkan form untuk mengedit informasi publik.
     *
     * @param  \App\Models\PublicInformation  $publicInformation
     * @return \Illuminate\View\View
     */
    public function edit(PublicInformation $publicInformation)
    {
        return view('public_information.edit', compact('publicInformation'));
    }

    /**
     * Memperbarui informasi publik.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicInformation  $publicInformation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PublicInformation $publicInformation)
    {
        // Validasi input
        $request->validate([
            'name_pd_okpd' => 'required|string|max:255',
            'document_name' => 'required|string|max:255',
            'creation_year' => 'required|integer|digits:4',
            'file' => 'nullable|file|mimes:pdf,docx,xlsx,jpg,png|max:10240', // Max 10MB
        ]);

        // Jika file baru diupload
        if ($request->hasFile('file')) {
            // Hapus file lama dari storage
            Storage::delete($publicInformation->file);

            // Upload file baru
            $filePath = $request->file('file')->store('public/information_files');

            // Perbarui data file
            $publicInformation->file = $filePath;
            $publicInformation->file_type = $request->file('file')->getClientOriginalExtension();
            $publicInformation->file_size = $request->file('file')->getSize();
        }

        // Memperbarui informasi publik
        $publicInformation->update([
            'name_pd_okpd' => $request->name_pd_okpd,
            'document_name' => $request->document_name,
            'creation_year' => $request->creation_year,
        ]);

        return redirect()->route('public_information.index')->with('success', 'Informasi publik berhasil diperbarui!');
    }

    /**
     * Menghapus informasi publik.
     *
     * @param  \App\Models\PublicInformation  $publicInformation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PublicInformation $publicInformation)
    {
        // Hapus file dari storage
        Storage::delete($publicInformation->file);

        // Hapus data dari database
        $publicInformation->delete();

        return redirect()->route('public_information.index')->with('success', 'Informasi publik berhasil dihapus!');
    }
}
