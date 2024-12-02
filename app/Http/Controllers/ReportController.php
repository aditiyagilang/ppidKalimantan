<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    /**
     * Tampilkan halaman utama laporan.
     */
    public function index()
    {
        return view('admin.report.index');
    }

    public function keuanganIndex()
{

    // Ambil data dengan type = 'foto'
    $finance = Report::where('type', 'finance') ->where('status', 'public')->get();
    // dd($finance);

    // Tampilkan view dengan data foto
    return view('public.reports.keuangan', compact('finance'));
}
    public function kinerjaIndex()
{

    // Ambil data dengan type = 'foto'
    $performance = Report::where('type', 'performance')
    ->where('status', 'public')->get();
    // dd($photos);

    // Tampilkan view dengan data foto
    return view('public.reports.kinerja', compact('performance'));
}
    public function penyelenggaraanIndex()
{

    // Ambil data dengan type = 'foto'
    $administration = Report::where('type', 'administration')
    ->where('status', 'public')
    ->get();


    // Tampilkan view dengan data foto
    return view('public.reports.penyelenggaraan', compact('administration'));
}


    public function ppidIndex()
{

    // Ambil data dengan type = 'foto'
    $ppid = Report::where('type', 'ppid')
    ->where('status', 'public')
    ->get();


    // Tampilkan view dengan data foto
    return view('public.reports.ppid', compact('ppid'));
}


    /**
     * Ambil data untuk DataTables.
     */
    public function show(Request $request)
    {
        $query = Report::query();

        return DataTables::of($query)
            ->addColumn('type', function ($report) {
                return ucfirst($report->type); // Menampilkan tipe dengan huruf pertama kapital
            })
            ->addColumn('status', function ($report) {
                $statusDropdown = '<select class="form-select form-select-sm status-dropdown rounded-pill" 
                                            style="background-color: ' . $this->getStatusColor($report->status) . '; color: #000; font-size: 12px;"
                                            data-id="' . $report->id . '" 
                                            name="status">';

                foreach (['private', 'public'] as $status) {
                    $selected = $report->status === $status ? 'selected' : '';
                    $statusDropdown .= '<option value="' . $status . '" ' . $selected . '>' . ucfirst($status) . '</option>';
                }

                $statusDropdown .= '</select>';
                return $statusDropdown;
            })
            ->addColumn('actions', function ($report) {
                return '<button type="button" class="btn btn-info btn-sm detail-button" 
                                data-id="' . $report->id . '" 
                                data-type="' . $report->type . '" 
                                data-year="' . $report->year . '" 
                                data-status="' . $report->status . '" 
                                data-file="' . $report->file . '" 
                                data-photo="' . $report->photo . '">
                                Detail
                            </button>
                            <button type="button" class="btn btn-warning btn-sm edit-button" 
                                data-id="' . $report->id . '" 
                                data-type="' . $report->type . '" 
                                data-year="' . $report->year . '" 
                                data-status="' . $report->status . '" 
                                data-file="' . $report->file . '" 
                                data-photo="' . $report->photo . '"
                              >
                                Edit
                            </button>
                            <form action="' . route('report.destroy', $report->id) . '" method="POST" style="display:inline;" 
                                onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus laporan ini?\')">
                                ' . csrf_field() . '
                                ' . method_field('DELETE') . '
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>';
            })
            
            ->rawColumns(['status', 'actions'])
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


    $request->validate([
        'id' => 'required',
        'type' => 'required|string',
        'year' => 'required',
        'status' => 'required|string',
        'photo' => 'required',
        'file' => 'required', 
    ]);
    // dd($request->all());



    // Ambil laporan berdasarkan ID
    $report = Report::findOrFail($request->id);
    $report->type = $request->type;
    $report->year = $request->year;
    $report->status = $request->status;

    // Proses foto jika ada
    if ($request->hasFile('photo')) {
        // Hapus file lama jika ada
        if ($report->photo && file_exists(public_path('assets/foto/' . $report->photo))) {
            unlink(public_path('assets/foto/' . $report->photo));
        }

        // Simpan file foto baru
        $photo = $request->file('photo');
        $photoName = uniqid() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('assets/foto'), $photoName);
        $report->photo = $photoName;
    }

    // Proses file lainnya jika ada
    if ($request->hasFile('file')) {
        // Hapus file lama jika ada
        if ($report->file && file_exists(public_path('assets/file/' . $report->file))) {
            unlink(public_path('assets/file/' . $report->file));
        }

        // Simpan file baru
        $file = $request->file('file');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/file'), $fileName);
        $report->file = $fileName;
    }

    // Simpan perubahan
    $report->save();

    return response()->json(['message' => 'Laporan berhasil diperbarui!']);
}

public function store(Request $request)
{
    $request->validate([
        'type' => 'required|string',
        'year' => 'required|integer',
        'status' => 'required|string',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'file' => 'nullable|file|mimes:pdf,doc,docx,xlsx,xls|max:2048',
    ]);

    // Buat laporan baru
    $report = new Report();
    $report->type = $request->type;
    $report->year = $request->year;
    $report->status = $request->status;

    // Proses foto jika ada
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = uniqid() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('assets/foto'), $photoName);
        $report->photo = $photoName;
    }

    // Proses file jika ada
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/file'), $fileName);
        $report->file = $fileName;
    }

    // Simpan laporan baru
    $report->save();

    return response()->json(['message' => 'Laporan berhasil disimpan!']);
}


    /**
     * Hapus laporan.
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
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
}
