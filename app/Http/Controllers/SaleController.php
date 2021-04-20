<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Http\Requests\SaleRequest;

class SaleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sales = Sale::all();
        $title = 'Sales';
        return view('pages.salePage', compact('sales', 'title'));
    }
    
    public function create()
    {
        return view('forms.saleCreateForm');
    }

    public function store(SaleRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store('public');
            
        }

        $sale = new Sale;
            
        $sale->invoice_serial = $request->invoice_serial;
        $sale->client = $request->client;
        $sale->unit = $request->unit;
        $sale->product = $request->product;
        $sale->amount = $request->amount;
        $sale->tax = $request->tax;
        $sale->created = $request->created;
        $sale->image = $path ?? null;

        $sale->save();

        return redirect()->route('sale.index');
    }

    public function show($id)
    {
        $sale = Sale::where('id', $id)->first();
        return view('forms.saleUpdateForm', compact('sale'));
    }

    public function update($id, SaleRequest $request)
    {
                
       Sale::where('id', $id)
          ->update([
            'invoice_serial' => $request->invoice_serial,
            'client' => $request->client,
            'unit' => $request->unit,
            'product' => $request->product,
            'amount' => $request->amount,
            'tax' => $request->tax,
            'created' => $request->created,
        ]);

        return redirect()->route('sale.index');
    }

     public function destroy($id)
    {
        $deletedRows = Sale::where('id', $id)->delete();
        return redirect()->route('sale.index');
    }
}