<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\TypeTransaction;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param  array  $data
     * @return bool
     */
    public function bankTransaction(array $data)
    {
      $bank = Bank::where('id', $data['bank_id'])->first();
      $bankTo = Bank::where('id', $data['subcategory_transaction_id'])->first();

      switch ($data['type_transaction_id']) {
        case TypeTransaction::INCOME:
          return $this->income($bank, $data['amount']);
        break;

        case TypeTransaction::EXPENSE:
          return $this->expense($bank, $data['amount']);
        break;

        case TypeTransaction::TRANSFER:
          return $this->transfer($bank, $bankTo, $data['amount']);
        break;

        default:
          return false;
      }
    }

    /**
     * @param  array  $data
     * @return bool
     */
    public function bankReverseTransaction(array $data)
    {
      $bank = Bank::where('id', $data['bank_id'])->first();
      $bankTo = Bank::where('id', $data['bankto_id'])->first();

      switch ($data['type_transaction_id']) {
        case TypeTransaction::INCOME:
          return $this->expense($bank, $data['amount']);
        break;

        case TypeTransaction::EXPENSE:
          return $this->income($bank, $data['amount']);
        break;

        case TypeTransaction::TRANSFER:
          return $this->transfer($bankTo, $bank, $data['amount']);
        break;

        default:
          return false;
      }
    }

    /**
     * @param  Bank  $bank
     * @param  int   $amount
     * @return bool
     */
    public function income(Bank $bank, $amount)
    {
    	try {
    		
    		$bank->balance = ($bank->balance) + $amount;
      	$bank->save();
      	return true;

    	} catch (Exception $e) {
    		
    		return false;

    	}
    }

    /**
     * @param  Bank  $bank
     * @param  int   $amount
     * @return bool
     */
    public function expense(Bank $bank, $amount)
    {
      try {
    		
    		$bank->balance = ($bank->balance) - $amount;
      	$bank->save();
      	return true;

    	} catch (Exception $e) {
    		
    		return false;

    	}
    }

    /**
     * @param  Bank  $bank
     * @param  Bank  $bankTo
     * @param  int   $amount
     * @return bool
     */
    public function transfer(Bank $bank, Bank $bankTo, $amount)
    {
    	try {
    		
    		$bank->balance = ($bank->balance) - $amount;
      	$bank->save();
      
      	$bankTo->balance = ($bankTo->balance) + $amount;
      	$bankTo->save();
      	return true;

    	} catch (Exception $e) {
    		
    		return false;

    	}
    }
}
