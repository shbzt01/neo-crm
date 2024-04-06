<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerSegment;

class SegmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'SalesTeam']);
    }

    public function index()
    {
        $segments = CustomerSegment::all();
        return view('dashboard.segments.index', compact('segments'));
    }

    public function create()
    {
        return view('dashboard.segments.create');
    }

    public function store(Request $request)
    {
        CustomerSegment::create($request->all());
        return redirect()->route('dashboard.segments.index');
    }

    public function show(CustomerSegment $segment)
    {
        return view('dashboard.segments.show', compact('segment'));
    }

    public function edit(CustomerSegment $segment)
    {
        return view('dashboard.segments.edit', compact('segment'));
    }

    public function update(Request $request, CustomerSegment $segment)
    {
        $segment->update($request->all());
        return redirect()->route('dashboard.segments.index');
    }

    public function destroy(CustomerSegment $segment)
    {
        $segment->delete();
        return redirect()->route('dashboard.segments.index');
    }
}
