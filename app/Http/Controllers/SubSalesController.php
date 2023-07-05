<?php

namespace App\Http\Controllers;

use App\Models\SubSales;
use Illuminate\Http\Request;
use App\Models\Item;

class SubSalesController extends Controller
{
    // ...

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($salesId)
    {
        $items = Item::all();
        return view('sub_sales.create', compact('items','salesId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $salesId)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'ITEM_ID' => 'required',
            'QTY_SALES' => 'required',
            'UNIT_PRICE' => 'required',
        ]);

        // Add the sales_id to the validated data
        $validatedData['SALES_ID'] = $salesId;

        // Create the sub_sale
        SubSales::create($validatedData);

        // Redirect back to the sales details page or a different page if desired
        return redirect()->route('sales.show', $salesId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSales  $subSales
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSales $subSale)
    {
        // Pass the sub_sale data to the edit view
        $items = Item::all();

        return view('sub_sales.edit', compact('subSale','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSales  $subSales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSales $subSale)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'QTY_SALES' => 'required',
            'UNIT_PRICE' => 'required',
        ]);

        // Update the sub_sale
        $subSale->update($validatedData);

        // Redirect back to the sales details page or a different page if desired
        return redirect()->route('sales.show', $subSale->SALES_ID);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSales  $subSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSales $subSale)
    {
        // Get the sales ID before deleting the sub_sale
        $salesId = $subSale->SALES_ID;

        // Delete the sub_sale
        $subSale->delete();

        // Redirect back to the sales details page or a different page if desired
        return redirect()->route('sales.show', $salesId);
    }
}
