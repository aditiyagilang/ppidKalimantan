<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all(); // Anda juga bisa gunakan pagination jika diperlukan

        // Melempar data ke view
        return view('admin.report', compact('reports'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    
       
    }



    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'file' => 'required|file', // Pastikan input file ada
        'photo' => 'required|file', // Pastikan input foto ada
        'type' => 'required|in:ppid,finance,performance,administration', // Validasi tipe
        'year' => 'required|integer', // Pastikan year adalah angka
        'status' => 'required|in:private,public', // Validasi status
    ]);

    // dd($request->all());

    // Ambil file dan foto dari request
    $file = $request->file('file');
    $photo = $request->file('photo');

    // Tentukan path penyimpanan
    $filePath = 'assets/file/';
    $photoPath = 'assets/foto/';

    // Pindahkan file ke direktori public/assets/file
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path($filePath), $fileName);

    // Pindahkan foto ke direktori public/assets/foto
    $photoName = time() . '_' . $photo->getClientOriginalName();
    $photo->move(public_path($photoPath), $photoName);

    // Simpan data ke database
    Report::create([
        'file' => $filePath . $fileName, // Simpan path relatif
        'photo' => $photoPath . $photoName, // Simpan path relatif
        'type' => $request->type,
        'year' => $request->year,
        'status' => $request->status,
    ]);

    // Redirect dengan notifikasi sukses
    return redirect()->route('reports.index')->with('success', 'Laporan berhasil ditambahkan.');
}



    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'file' => 'nullable|file|mimes:pdf,docx|max:2048', // Opsional saat diperbarui
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Opsional saat diperbarui
            'type' => 'required|in:ppid,finance,performance,administration',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'status' => 'required|in:private,public',
        ]);
    
        // Update file laporan jika ada file baru
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($report->file && file_exists(public_path('assets/file/' . basename($report->file)))) {
                unlink(public_path('assets/file/' . basename($report->file)));
            }
    
            // Simpan file baru
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('assets/file'), $fileName);
            $report->file = 'assets/file/' . $fileName;
        }
    
        // Update foto jika ada file baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($report->photo && file_exists(public_path('assets/foto/' . basename($report->photo)))) {
                unlink(public_path('assets/foto/' . basename($report->photo)));
            }
    
            // Simpan foto baru
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('assets/foto'), $photoName);
            $report->photo = 'assets/foto/' . $photoName;
        }
    
        // Update field lainnya
        $report->type = $request->type;
        $report->year = $request->year;
        $report->status = $request->status;
    
        $report->save();
    
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil diperbarui.');
    }
    

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
