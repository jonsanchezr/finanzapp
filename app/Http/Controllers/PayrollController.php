<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Http\Requests\PayrollRequest;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payrolls = Payroll::all();
        return view('pages.payrollPage', compact('payrolls'));
        // return redirect()->route('name_route');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.payrollCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PayrollRequest $request)
    {
          
        $payroll = new Payroll;
        $payroll->create($request->all());

        return redirect()->route('payroll.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($serial)
    {
        $payroll =Payroll::where('serial', $serial)->first();
        return view('forms.payrollUpdateForm', compact('payroll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($serial, PayrollRequest $request)
    {
        
        Payroll::where('serial', $serial)
          ->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'lastname' => $request->lastname,
        ]);

        return redirect()->route('payroll.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($serial)
    {
        Payroll::where('serial', $serial)->delete();
          
        return redirect()->route('payroll.index');
    }
}
