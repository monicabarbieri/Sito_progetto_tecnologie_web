<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Admin
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
            
            $message = "WARNING , YOU NON PUOI EFFETTUARE UNA PRENOTAZIONE";
    
            //controllo se utente e` realmente un "admin"
            if (Auth::user()->role == "yes") 
            return redirect('/reservation')->with('no', $message);

            else 
            return $next($request);
        
    
        }
}