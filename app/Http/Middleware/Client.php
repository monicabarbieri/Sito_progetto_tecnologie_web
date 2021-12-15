<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $message = "PAGINE RISERVATE AI CLIENTI !";

        //controllo se utente e` realmente un "admin"
        if (Auth::check() && Auth::user()->role == "no") {
            return $next($request);
        }

        return redirect('/')->with('no', $message);

    }
}