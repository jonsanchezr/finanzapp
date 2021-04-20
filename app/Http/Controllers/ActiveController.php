<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Active;
use App\Models\CategoryActive;
use App\Http\Requests\ActiveRequest;


class ActiveController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actives = Active::with('categoryActive')->get();
        $categoryActives = CategoryActive::all();
        $title = 'Activos';
        return view('pages.activePage', compact(
            'actives',
            'title',
            'categoryActives'
        ));
    }

    public function store(ActiveRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store('public');
        }

        $active = new Active;

        $active->name = $request->name;
        $active->description = $request->description;
        $active->unit = $request->unit;
        $active->amount = $request->amount;
        $active->image = $path ?? null;
        $active->category_active_id = $request->category_active_id;

        $active->save();

        return redirect()
            ->route('actives.index')
            ->with('success','Activo creado');
    }

    public function update($id, ActiveRequest $request)
    {   
       Active::where('id', $id)
          ->update([
            'name' => $request->name,
            'description' => $request->description,
            'unit' => $request->unit,
            'amount' => $request->amount,
            'category_active_id' => $request->category_active_id,
        ]);

        return redirect()
            ->route('actives.index')
            ->with('success','Activo actualizado');
    }

    public function destroy($id)
    {
        $deletedRows = Active::where('id', $id)->delete();
        return redirect()
            ->route('actives.index')
            ->with('success','Activo eliminado');
    }
}
