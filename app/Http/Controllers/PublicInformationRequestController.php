<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicInformationRequest;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use App\Mail\CodeNotification;
use App\Mail\StatusUpdateNotification;
use Illuminate\Support\Facades\Mail;

class PublicInformationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.informasi.index');
    }

    public function publicForm()
    {
        return view('public.informationForm');
    }

    public function check()
    {
        return view('public.informationCheck');
    }

    public function status(Request $request)
    {
        $nik = $request->query('nik');
        $requestCode = $request->query('request_code');

        $result = PublicInformationRequest::where('nik', $nik)
            ->where('code', $requestCode)
            ->first();

        if ($result) {
            return response()->json([
                'success' => true,
                'status' => $result->status,
                'reason' => $result->reject_reason,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan.',
        ]);
    }

    private function getStatusColor($status)
    {
        switch ($status) {
            case 'Approved':
                return 'green';
            case 'Checking':
                return 'yellow';
            case 'Rejected':
                return 'red';
            default:
                return 'white';
        }
    }

    public function show(Request $request)
    {
        $query = PublicInformationRequest::query();
        
        return DataTables::of($query)
            ->addColumn('status', function ($request) {
                $statusDropdown = '<select class="form-select form-select-sm status-dropdown rounded-pill" 
                                            style="background-color: ' . $this->getStatusColor($request->status) . '; color: #000; font-size: 12px;"
                                            data-id="'.$request->id.'" 
                                            name="status">';
            
                foreach (['Approved', 'Checking', 'Rejected'] as $status) {
                    $selected = $request->status === $status ? 'selected' : '';
                    $statusDropdown .= '<option value="'.$status.'" '.$selected.'>'.ucfirst($status).'</option>';
                }
            
                $statusDropdown .= '</select>';
                return $statusDropdown;
            })
            ->addColumn('actions', function ($request) {
                return '<button type="button" class="btn btn-info btn-sm detail-button" data-id="'.$request->id.'" data-ktp="'.$request->ktp_url.'" 
                            data-file="'.$request->file.'" data-category="'.$request->request_category.'" data-name="'.$request->full_name.'" 
                            data-email="'.$request->email.'" data-phone="'.$request->phone_number.'" data-address="'.$request->address.'" data-reason="'.$request->reason.'" data-detail="'.$request->detail_information.'">
                            Detail
                        </button>
                        <form action="'.route('request.destroy', $request).'" method="POST" style="display:inline;" 
                            onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        ';
            })
            ->rawColumns(['status', 'actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('public_information_requests.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'type' => 'required',
            'nik' => 'required',
            'name' => 'required',
            'ktp' => 'required|file|mimes:jpg,png,pdf|max:5000',
            'detail' => 'required',
            'reason' => 'required',
            'job' => 'required',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:5000',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $ktpPath = $request->file('ktp')->store('uploads/ktp', 'public');
        $filePath = $request->hasFile('file') 
            ? $request->file('file')->store('uploads/files', 'public') 
            : null;
            
        $randomCode = 'PIP' . Str::random(7);

        PublicInformationRequest::create([
            'request_category' => $request->type,
            'code' => $randomCode,
            'nik' => $request->nik,
            'full_name' => $request->name,
            'ktp_url' => $ktpPath,
            'detail_information' => $request->detail,
            'reason' => $request->reason,
            'job' => $request->job,
            'file' => $filePath,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone,
        ]);

        Mail::to($request->email)->send(new CodeNotification($randomCode));

        return redirect()->route('public.index')->with('success', 'Permohonan berhasil diajukan. Silahkan cek email anda untuk informasi lebih lanjut');
    }

    public function edit(PublicInformationRequest $request)
    {
        return view('public_information_requests.edit', compact('request'));
    }

    public function update(Request $request, PublicInformationRequest $publicInformationRequest)
    {
        $request->validate([
            'request_category' => 'required',
            'nik' => 'required',
            'full_name' => 'required',
            'file' => 'nullable|file',
            'address' => 'required',
            'email' => 'required|email|unique:public_information_requests,email,' . $publicInformationRequest->id,
            'phone_number' => 'required',
            'occupation' => 'required',
            'status' => 'required',
        ]);

        $publicInformationRequest->update($request->all());
        return redirect()->route('public_information_requests.index');
    }

    public function updateStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:public_information_requests,id',
            'status' => 'required|in:Approved,Checking,Rejected',
            'reject_reason' => 'nullable|string|max:255',
        ]);

        $record = PublicInformationRequest::findOrFail($validated['id']);
        $record->status = $validated['status'];
        $record->reject_reason = $validated['reject_reason'] ?? null;
        $record->save();

        Mail::to($record->email)->send(new StatusUpdateNotification($record->status, $record->reject_reason));

        return response()->json(['success' => true]);
    }

    public function destroy(PublicInformationRequest $id)
    {
        $id->delete();
        return redirect()->route('request.index');
    }
}
