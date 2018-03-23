<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckVerify
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
      if (!Auth::user()->verified) {
        Auth::logout();
        return redirect('login')->with('error', 'Your email is not verified, please verify your email first.');
      }
        return $next($request);
    }
}
