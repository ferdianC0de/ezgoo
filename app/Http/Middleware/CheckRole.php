<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      //...$role buat pass array
      if (!empty($request->user())) {
        if (!$request->user()->hasRole($role)) {
          abort(401, 'Unauthorized');
        }
        return $next($request);
      }
      abort(401, 'Unauthorized');
    }
}
