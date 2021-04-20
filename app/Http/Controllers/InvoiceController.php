<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $invoices = Invoice::all();
        $title = 'Facturas';
        return view('pages.invoicePage', compact('invoices', 'title'));
    }
    
    public function create()
    {
        return view('forms.invoiceCreateForm');
    }

    public function store(InvoiceRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store('public');
        }
         $invoice = new Invoice; 

        $invoice->serial = $request->serial;
        $invoice->from_name = $request->from_name;
        $invoice->from_country = $request->from_country;
        $invoice->from_state = $request->from_state;
        $invoice->from_city = $request->from_city;
        $invoice->from_address = $request->from_address;
        $invoice->from_phone = $request->from_phone;
        $invoice->from_mail = $request->from_mail;

        $invoice->image = $path ?? null;

        $invoice->save();

        return redirect()->route('invoices.index');
    }

    public function show($serial)
    {
        $invoice = Invoice::where('serial', $serial)->first();
        return view('forms.invoiceUpdateForm', compact('invoice'));
    }

    public function update($serial, InvoiceRequest $request)
    {      
       Invoice::where('serial', $serial)
          ->update([
            'serial' => $request->serial,
            'from_name' => $request->from_name,
            'from_country' => $request->from_country,
            'from_state' => $request->from_state,
            'from_city' => $request->from_city,
            'from_address' => $request->from_address,
            'from_phone' => $request->from_phone,
            'from_mail' => $request->from_mail,
        ]);

        return redirect()->route('invoices.index');
    }

     public function destroy($serial)
    {
        $deletedRows = Invoice::where('serial', $serial)->delete();
        return redirect()->route('invoices.index');
    }
}