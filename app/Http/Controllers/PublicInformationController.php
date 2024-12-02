<?php

namespace App\Http\Controllers;


use App\Models\PublicInformation;
use App\Models\Report;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PublicInformationController extends Controller
{
    /**
     * Tampilkan halaman utama laporan.
     */
    public function index()
    {
        return view('admin.document.index');
    }

    /**
     * Ambil data untuk DataTables.
     */
    public function show(Request $request)
    {
        $query = PublicInformation::query();

        return DataTables::of($query)
          
        ->addColumn('actions', function ($document) {
            return '<button type="button" class="btn btn-info btn-sm detail-button" 
                            data-id="' . $document->id . '" 
                            data-name_pd_okpd="' . $document->name_pd_okpd . '"
                            data-document_name="' . $document->document_name . '" 
                            data-creation_year="' . $document->creation_year . '" 
                         
                            data-file_type="' . $document->file_type . '" 
                            data-file_size="' . $document->file_size . '" 
                            data-file="' . $document->file . '" 
                          >
                            Detail
                        </button>
                        <button type="button" class="btn btn-warning btn-sm edit-button" 
                             data-id="' . $document->id . '" 
                            data-name_pd_okpd="' . $document->name_pd_okpd . '"
                            data-document_name="' . $document->document_name . '" 
                            data-creation_year="' . $document->creation_year . '" 
                         
                            data-file_type="' . $document->file_type . '" 
                            data-file_size="' . $document->file_size . '" 
                            data-file="' . $document->file . '" 
                           >
                            Edit
                        </button>
                        <form action="' . route('document.destroy', $document->id) . '" method="POST" style="display:inline;" 
                            onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus laporan ini?\')">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>';
        })
            
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Perbarui status laporan.
     */
    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:reports,id',
            'status' => 'required|in:private,public',
        ]);

        $report = Report::findOrFail($request->id);
        $report->update(['status' => $request->status]);

        return response()->json([
            'message' => 'Status laporan berhasil diperbarui.',
        ]);
    }

    public function update(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'id' => 'required',
            'name_pd_okpd' => 'required|string',
            'document_name' => 'required|string',
            'creation_year' => 'required',
    
        
            'file_type' => 'required',
            'file_size' => 'required',
            'file' => 'nullable',
        ]);
        // dd($request->all());

        // Ambil laporan berdasarkan ID
        $document = PublicInformation::findOrFail($request->id);
        $document->name_pd_okpd = $request->name_pd_okpd;
        $document->document_name = $request->document_name;
        $document->creation_year = $request->creation_year;
        $document->file_type = $request->file_type;
        $document->file_size = $request->file_size;
    

        // Proses file lainnya jika ada
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($document->file && file_exists(public_path('assets/file/' . $document->file))) {
                unlink(public_path('assets/file/' . $document->file));
            }

            // Simpan file baru
            $file = $request->file('file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/file'), $fileName);
            $document->file = $fileName;
        }

        // Simpan perubahan
        $document->save();

        return response()->json(['message' => 'Laporan berhasil diperbarui!']);
    }


    public function store(Request $request)
    {

        $request->validate([
            'name_pd_okpd' => 'required|string',
            'document_name' => 'required|string',
            'creation_year' => 'required',
            'file_type' => 'required',
            'file_size' => 'required',
            'file' => 'nullable', // Validasi file
        ]);
        // dd($request->all());

        // Buat instance baru PublicInformation
        $document = new PublicInformation();
        $document->name_pd_okpd = $request->name_pd_okpd;
        $document->document_name = $request->document_name;
        $document->creation_year = $request->creation_year;
        $document->file_type = $request->file_type;
        $document->file_size = $request->file_size;

        // Proses file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            
            // Buat folder jika belum ada
            if (!file_exists(public_path('assets/file'))) {
                mkdir(public_path('assets/file'), 0777, true);
            }

            // Pindahkan file ke folder
            $file->move(public_path('assets/file'), $fileName);
            $document->file = $fileName;
        }

        // Simpan ke database
        $document->save();

        return response()->json([
            'message' => 'Laporan berhasil ditambahkan!',
            'data' => $document,
        ], 201);
    }

    /**
     * Hapus laporan.
     */
    public function destroy($id)
    {
        $report = PublicInformation::findOrFail($id);
        $report->delete();

        return redirect()->back()->with('success', 'Laporan berhasil dihapus.');
    }

    /**
     * Mendapatkan warna status untuk dropdown.
     */
    private function getStatusColor($status)
    {
        return match ($status) {
            'private' => '#d9534f', // Merah
            'public' => '#5cb85c',  // Hijau
            default => '#ddd',     // Abu-abu
        };
    }

    public function public()
    {
        return view('public.informationPublic');
    }

    public function data()
    {
        $query = PublicInformation::query();
        
        return DataTables::of($query)
        ->addColumn('download', function ($request) {
            if ($request->file) {
                return '<a href="'.asset('assets/file/'.$request->file).'" class="btn btn-success btn-sm" download>
                            <i class="fa fa-download"></i> Download
                        </a>';
            }
            return '<span class="text-muted">No file</span>';
        })
        ->rawColumns(['download'])
        ->make(true);

    }
}
