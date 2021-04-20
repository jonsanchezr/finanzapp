<?php

namespace App\Http\Controllers;

class CurrencyController extends Controller

{
    /**
 * @param $currency
 *
 * @return \Illuminate\Http\RedirectResponse
 */
    public function swap($currency)
    {
        // Almacenar la moneda en la session
        session()->put('currency', $currency);
        return redirect()->back();
    }
}