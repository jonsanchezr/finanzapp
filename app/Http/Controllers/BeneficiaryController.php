<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Http\Requests\BeneficiaryRequest;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title= 'Beneficiarios';
        $beneficiaries = Beneficiary::all();
        return view('pages.beneficiaryPage', compact('beneficiaries','title'));
        // return redirect()->route('name_route');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.beneficiaryCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeneficiaryRequest $request)
    {
          
        $beneficiary = new Beneficiary;
        $beneficiary->create($request->all());

        return redirect()
            ->route('beneficiaries.index')
            ->with('success','Beneficiario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiary =Beneficiary::where('id', $id)->first();
        return view('forms.beneficiaryUpdateForm', compact('beneficiary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, BeneficiaryRequest $request)
    {
        
        Beneficiary::where('id', $id)
          ->update([
            'name' => $request->name,
            'identification' => $request->identification,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()
            ->route('beneficiaries.index')
            ->with('success','Beneficiario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Beneficiary::where('id', $id)->delete();

        return redirect()
            ->route('beneficiaries.index')
            ->with('success','Beneficiario eliminado');
    }
}
