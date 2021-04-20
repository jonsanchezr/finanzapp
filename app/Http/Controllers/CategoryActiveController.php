<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryActive;
use App\Http\Requests\CategoryActiveRequest;

class CategoryActiveController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoryActives = CategoryActive::all();
        $title = 'Categorias de Activos';
        return view('pages.categoryActivePage', compact('categoryActives', 'title'));
    }
    
    public function create()
    {
    }

    public function store(CategoryActiveRequest $request)
    {
        $categoryActive = new CategoryActive;
        $categoryActive->create($request->all());

        return redirect()
          ->route('categoryactives.index')
          ->with('success','Categoria activo creada');
    }

    public function show($id)
    {
    }

    public function update($id, CategoryActiveRequest $request)
    {
        
       CategoryActive::where('id', $id)
          ->update([
            'name' => $request->name
          ]);

        return redirect()
          ->route('categoryactives.index')
          ->with('success','Categoria activo actualizada');
    }

     public function destroy($id)
    {
        $deletedRows = categoryActive::where('id', $id)->delete();
        return redirect()
          ->route('categoryactives.index')
          ->with('success','Categoria activo eliminada');
    }
}