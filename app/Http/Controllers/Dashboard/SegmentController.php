<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Segment;

class SegmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Admin,SalesManager']);
    }

    public function index()
    {
        $segments = Segment::all();
        return view('dashboard.segments.index', compact('segments'));
    }

    public function create()
    {
        return view('dashboard.segments.create');
    }

    public function store(Request $request)
    {
        Segment::create($request->all());
        return redirect()->route('dashboard.segments.index');
    }

    public function show(Segment $segment)
    {
        return view('dashboard.segments.show', compact('segment'));
    }

    public function edit(Segment $segment)
    {
        return view('dashboard.segments.edit', compact('segment'));
    }

    public function update(Request $request, Segment $segment)
    {
        $segment->update($request->all());
        return redirect()->route('dashboard.segments.index');
    }

    public function destroy(Segment $segment)
    {
        $segment->delete();
        return redirect()->route('dashboard.segments.index');
    }
}
