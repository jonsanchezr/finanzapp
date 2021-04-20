<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubcategoryTransaction;
use App\Models\CategoryTransaction;
use App\Http\Requests\SubcategoryTransactionRequest;

class SubcategoryTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryTransaction::all();
        $subcategorytransactions = SubcategoryTransaction::with('categoryTransaction')->get();
        $title = 'SubCategorias';
        return view('pages.subcategorytransactionsPage', compact('subcategorytransactions','categories','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryTransactionRequest $request)
    {
        $subcategorytransaction = new SubcategoryTransaction;
        $subcategorytransaction->create($request->all());

        return redirect()
            ->route('subcategorytransactions.index')
            ->with('success','SubCategoria creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, SubcategoryTransactionRequest $request)
    {
        SubcategoryTransaction::where('id', $id)
          ->update($request->validated());

        return redirect()->route('subcategorytransactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubcategoryTransaction::where('id', $id)->delete();

        return redirect()->route('subcategorytransactions.index');
    }
}
