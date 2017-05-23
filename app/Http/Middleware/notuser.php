<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class notuser
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
      if (Auth::check()) {
            # code...
            if (Auth::user()->level !='user') {
                # code...
                return redirect('/batas');
            }
            else{
                return $next($request);
            }
        }
}
}