<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objection;

class ObjectionController extends Controller
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

    public function show(Objection $objection)
    {
        return view('objections.show', compact('objection'));
    }

    public function edit(Objection $objection)
    {
        return view('objections.edit', compact('objection'));
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
        return redirect()->route('objections.index');
    }

    public function destroy(Objection $objection)
    {
        $objection->delete();
        return redirect()->route('objections.index');
    }
}
