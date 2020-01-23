<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class amin
{
    /**
     * Handle an incoming request.
     *
     *para registrar el Middleware hayq ue ir a /app/http/Kerner.php
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //el usuario tiene que autenticarse y ser admin
      if (Auth::check() && Auth::user()->admin==true) {
        return $next($request);
      }else{
        return redirect('/');
      }

    }
}
