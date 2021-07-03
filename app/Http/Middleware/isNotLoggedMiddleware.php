<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isNotLoggedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('etudiant_id')){
            return redirect(route('login'));
        }
        return $next($request);
    }
}
