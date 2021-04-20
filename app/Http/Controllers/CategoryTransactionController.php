<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryTransaction;
use App\Models\TypeTransaction;
use App\Http\Requests\CategoryTransactionRequest;

class CategoryTransactionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoryTransactions = CategoryTransaction::with('type')->get();
        $types = TypeTransaction::all();
        $title = 'Categorias';
        return view('pages.categoryTransactionPage', compact('categoryTransactions', 'title','types'));
    }
    
    public function create()
    {
    }

    public function store(CategoryTransactionRequest $request)
    {
        $categoryTransaction = new CategoryTransaction;
        $categoryTransaction->create($request->all());

        return redirect()
            ->route('categorytransactions.index')
            ->with('success','Categoria creada');
    }

    public function show($id)
    {
    }

    public function update($id, CategoryTransactionRequest $request)
    {
        
       CategoryTransaction::where('id', $id)
          ->update([
            'type_transaction_id' => $request->type_transaction_id,
            'name' => $request->name,
          ]);

        return redirect()
            ->route('categorytransactions.index')
            ->with('success','Categoria actualizada');
    }

     public function destroy($id)
    {
        $deletedRows = categoryTransaction::where('id', $id)->delete();
        return redirect()
            ->route('categorytransactions.index')
            ->with('success','Categoria eliminada');
    }
}