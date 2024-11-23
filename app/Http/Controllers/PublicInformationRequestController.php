<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicInformationRequest;

class PublicInformationRequestController extends Controller
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
        return view('public_information_requests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'request_category' => 'required',
            'nik' => 'required',
            'full_name' => 'required',
            'file' => 'nullable|file',
            'address' => 'required',
            'email' => 'required|email|unique:public_information_requests',
            'phone_number' => 'required',
            'occupation' => 'required',
            'status' => 'required',
        ]);

        PublicInformationRequest::create($request->all());
        return redirect()->route('public_information_requests.index');
    }

    public function show(PublicInformationRequest $request)
    {
        return view('public_information_requests.show', compact('request'));
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

    public function destroy(PublicInformationRequest $request)
    {
        $request->delete();
        return redirect()->route('public_information_requests.index');
    }
}
