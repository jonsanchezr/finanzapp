<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSale;
use App\Http\Requests\TypeSaleRequest;

class TypeSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typesales = TypeSale::all();
        return view('pages.typesalePage', compact('typesales'));
        // return redirect()->route('name_route');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.typesaleCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeSaleRequest $request)
    {
        $typesale = new TypeSale;
                    
        $typesale->create($request->all());

        return redirect()->route('typesale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typesale = TypeSale::where('id', $id)->first();
        return view('forms.typesaleUpdateForm', compact('typesale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TypeSaleRequest $request)
    {
        TypeSale::where('id', $id)
          ->update([
            'name' => $request->name,
        ]);

        return redirect()->route('typesale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeSale::where('id', $id)->delete();

        return redirect()->route('typesale.index');
    }
}
