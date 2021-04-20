<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TypeTransaction;
use App\Models\CategoryTransaction;
use App\Models\Beneficiary;
use App\Models\Bank;
use App\Http\Requests\TransactionRequest;

use Illuminate\Http\Request;
use Exception;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Transacciones';
        $transactions = Transaction::with('type','subCategory','beneficiary')->get();
        $types = TypeTransaction::all();
        $beneficiaries = Beneficiary::all();
        $banks = Bank::all();
        $categories_income = CategoryTransaction::with('subCategories')
            ->where('type_transaction_id', TypeTransaction::INCOME)
            ->get();

        $categories_expense = CategoryTransaction::with('subCategories')
            ->where('type_transaction_id', TypeTransaction::EXPENSE)
            ->get();

        $categories_transfer = Bank::all();

        //return response()->json($categories_income);

        return view('pages.transactionPage', compact(
            'title','transactions','types','categories_income','categories_expense','categories_transfer','beneficiaries','banks'));
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
    public function store(TransactionRequest $request)
    {
        try {
            if (!$this->bankTransaction($request->all())) {
                throw new Exception;
            }
            if ($request->type_transaction_id == TypeTransaction::TRANSFER) {
                $transaction = new Transaction;
                $transaction->create(array_merge($request->all(), [
                    'subcategory_transaction_id' => null,
                    'bankto_id' => $request->subcategory_transaction_id,
                ]));
            } else {
                $transaction = new Transaction;
                $transaction->create($request->all());
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Error intentando crear transaccion']);
        }

        return redirect()
            ->route('transactions.index')
            ->with('success','Transaccion creada');
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
    public function update($id, Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::where('id', $id)->first();

        try {
            if (!$this->bankReverseTransaction($transaction->toArray())) {
                throw new Exception;
            }
            $transaction->delete();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Error intentando eliminar transaccion']);
        }

        return redirect()
            ->route('transactions.index')
            ->with('success','Transaccion eliminada');
    }
}
