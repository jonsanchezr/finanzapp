<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TypeActive;
use App\Http\Requests\TypeActiveRequest;

class TypeActiveController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $typeactives = Typeactive::all();
        $title = 'Tipos de Activos';
        return view('pages.typeactivePage', compact('typeactives', 'title'));
    }
    
    public function create()
    {
        return view('forms.typeactiveCreateForm');
    }

    public function store(TypeActiveRequest $request)
    {
        $typeactive = new Typeactive;

        $typeactive->name = $request->name;

        $typeactive->save();

        return redirect()->route('typeactives.index');
    }

    public function show($id)
    {
        $typeactive = Typeactive::where('id', $id)->first();
        return view('forms.typeactiveUpdateForm', compact('typeactive'));
    }

    public function update($id, TypeActiveRequest $request)
    {        
       Typeactive::where('id', $id)
          ->update([
            'name' => $request->name,
        ]);

        return redirect()->route('typeactives.index');
    }

     public function destroy($id)
    {
        $deletedRows = Typeactive::where('id', $id)->delete();
        return redirect()->route('typeactives.index');
    }
}