<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Http\Requests\BankRequest;

class BankController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banks = Bank::all();
        $title = 'Bancos';
        return view('pages.bankPage', compact('banks', 'title'));
    }
    

    public function store(BankRequest $request)
    {
        $bank = new Bank;

        $bank->name = $request->name;
        $bank->account = $request->account;
        $bank->holder = $request->holder;
        $bank->identification = $request->identification;
        $bank->type = $request->type;
        $bank->email = $request->email;
        $bank->balance = 0;

        $bank->save();

        return redirect()
            ->route('banks.index')
            ->with('success','Banco creado');
    }

    public function show($id)
    {
        $bank = Bank::where('id', $id)->first();
        return view('forms.bankUpdateForm', compact('bank'));
    }

    public function update($id, BankRequest $request)
    {        
       Bank::where('id', $id)
          ->update([
            'name' => $request->name,
            'account' => $request->account,
            'holder' => $request->holder,
            'identification' => $request->identification,
            'type' => $request->type,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('banks.index')
            ->with('success','Banco actualizado');
    }

    public function destroy($id)
    {
        $deletedRows = bank::where('id', $id)->delete();
        return redirect()
            ->route('banks.index')
            ->with('success','Banco eliminado');
    }
}
