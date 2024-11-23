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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
            'photo' => 'required|file',
            'type' => 'required',
            'year' => 'required|integer',
            'status' => 'required',
        ]);

        Report::create($request->all());
        return redirect()->route('reports.index');
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
            'file' => 'required|file',
            'photo' => 'required|file',
            'type' => 'required',
            'year' => 'required|integer',
            'status' => 'required',
        ]);

        $report->update($request->all());
        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
