<?php

namespace App\Http\Middleware;


use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class One
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$role=Auth::user()->id;
        if (!Auth::check() || Auth::user()->role_id != '1') {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
