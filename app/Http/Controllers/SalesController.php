<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Customer;
use App\Models\Salesman;
use App\Models\SubSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::all();

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $customers = Customer::all();
        $salesmen = Salesman::all();
        return view('sales.create', compact('customers', 'salesmen'));
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'SALES_NO' => 'required',
            'CUSTOMER_ID' => 'required',
            'SALESMAN_ID' => 'required',
        ]);

        $validatedData['CREATE_BY'] = Auth::id();

        $sale = Sales::create($validatedData);

        // return redirect()->route('sales.show')->with('success', 'Sales created successfully.');
        return redirect()->route('sales.show', $sale->SALES_ID)->with('success', 'Sales created successfully.');
    }

    public function show($salesId)
    {
        $sales = Sales::findOrFail($salesId);
        $subSales = $sales->subSales;
        $customers = Customer::all();
        $salesmen = Salesman::all();
        return view('sales.show', compact('sales','subSales','customers','salesmen','salesId'));
    }

    public function edit($id)
    {
        $sales = Sales::findOrFail($id);
        $customers = Customer::all();
        $salesmen = Salesman::all();
        return view('sales.edit', compact('sales','customers','salesmen'));
    }


     public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'SALES_NO' => 'required',
            'CUSTOMER_ID' => 'required',
            'SALESMAN_ID' => 'required',
        ]);

        $sales = Sales::findOrFail($id);
        $sales->update($validatedData);

        return redirect()->route('sales.index')->with('success', 'Sales updated successfully.');
    }

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();

        return redirect()->route('sales.index')->with('success', 'Sales deleted successfully.');
    }
}
