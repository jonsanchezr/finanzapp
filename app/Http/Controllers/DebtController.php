<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debt;
use App\Http\Requests\DebtRequest;

class DebtController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $debts = Debt::all();
        $title = 'Deudas';
        return view('pages.debtPage', compact('debts', 'title'));
    }

    public function store(DebtRequest $request)
    {
        $debt = new Debt;
        $debt->motive = $request->motive;
        $debt->description = $request->description;
        $debt->amount = $request->amount;

        $debt->save();

        return redirect()
            ->route('debts.index')
            ->with('success','Deuda creada');
    }

    public function update($id, DebtRequest $request)
    {
       Debt::where('id', $id)
          ->update([
            'motive' => $request->motive,
            'description' => $request->description,
            'amount' => $request->amount,
        ]);

        return redirect()
            ->route('debts.index')
            ->with('success','Deuda actualizada');
    }

    public function destroy($id)
    {
        $deletedRows = debt::where('id', $id)->delete();
        return redirect()
            ->route('debts.index')
            ->with('success','Deuda eliminada');
    }
}
