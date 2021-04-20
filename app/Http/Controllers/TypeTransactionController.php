<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTransaction;
use App\Http\Requests\TypeTransactionRequest;

class TypeTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typetransactions = TypeTransaction::all();
        return view('pages.typetransactionPage', compact('typetransactions'));
        // return redirect()->route('name_route');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.typetransactionCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeTransactionRequest $request)
    {
        $typetransaction = new TypeTransaction;
        
        $typetransaction->create($request->all());

        return redirect()->route('typetransactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typetransaction = TypeTransaction::where('id', $id)->first();
        return view('forms.typetransactionUpdateForm', compact('typetransaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TypeTransactionRequest $request)
    {
        TypeTransaction::where('id', $id)
          ->update([
            'name' => $request->name,
        ]);

        return redirect()->route('typetransactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeTransaction::where('id', $id)->delete();

        return redirect()->route('typetransactions.index');
    }
}
