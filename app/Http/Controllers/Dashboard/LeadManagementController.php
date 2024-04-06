<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Customer;

class LeadManagementController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return view('dashboard.leads.index', compact('leads'));
    }

    public function create()
    {
        return view('dashboard.leads.create');
    }

    public function store(Request $request)
    {
        Lead::create($request->all());
        return redirect()->route('dashboard.leads.index');
    }

    public function edit(Lead $lead)
    {
        return view('dashboard.leads.edit', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        if ($request->has('convert_to_customer')) {
            $customer = Customer::create($lead->only(['name', 'email', 'phone']));
            $lead->delete();
            return redirect()->route('dashboard.customers.index');
        }
        $lead->update($request->all());
        return redirect()->route('dashboard.leads.index');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('dashboard.leads.index');
    }
}
