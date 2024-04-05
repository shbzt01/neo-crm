<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'Admin','SalesTeam','SupportStaff']);
    }

    public function index()
    {
        $customers = Customer::all();
        return view('dashboard.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('dashboard.customers.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('dashboard.customers.index');
    }

    public function show(Customer $customer)
    {
        return view('dashboard.customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('dashboard.customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('dashboard.customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('dashboard.customers.index');
    }
}
