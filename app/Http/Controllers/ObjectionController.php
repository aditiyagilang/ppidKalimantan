<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objection;
use Yajra\DataTables\DataTables;

class ObjectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.keberatan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('objections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'request_code' => 'required|unique:objections',
            'nik' => 'required',
            'full_name' => 'required',
            'reason' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'case_position' => 'required',
            'status' => 'required',
        ]);

        Objection::create($request->all());
        return redirect()->route('objections.index');
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
        $query = Objection::query();
        
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
                            data-file="'.$request->file.'" data-name="'.$request->full_name.'" 
                            data-phone="'.$request->phone_number.'" data-address="'.$request->address.'" data-reason="'.$request->reason.'" data-case_position="'.$request->case_position.'">
                            Detail
                        </button>
                        <form action="'.route('objection.destroy', $request).'" method="POST" style="display:inline;" 
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

    public function edit(Objection $objection)
    {
        return view('objection.edit', compact('objection'));
    }

    public function update(Request $request, Objection $objection)
    {
        $request->validate([
            'request_code' => 'required',
            'nik' => 'required',
            'full_name' => 'required',
            'reason' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'case_position' => 'required',
            'status' => 'required',
        ]);

        $objection->update($request->all());
        return redirect()->route('objection.index');
    }

    public function updateStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:objection,id',
            'status' => 'required|in:Approved,Checking,Rejected',
            'reject_reason' => 'nullable|string|max:255',
        ]);

        $record = Objection::findOrFail($validated['id']);
        $record->status = $validated['status'];
        $record->reject_reason = $validated['reject_reason'] ?? null;
        $record->save();

        return response()->json(['success' => true]);
    }

    public function destroy(Objection $id)
    {
        $id->delete();
        return redirect()->route('objection.index');
    }
}
