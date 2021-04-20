<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class CurrencyMiddleware.
 */
class CurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         * If esta a true el valor de la variable status que tenemos en currency.php
         */
        if (config('currency.status')) {
            if (empty(session()->get('currency'))) {
                session()->put('currency', config('app.currency'));
            }
        }

        return $next($request);
    }
}