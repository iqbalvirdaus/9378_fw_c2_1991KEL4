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
     * @param  string|null  $guard
     * @return mixed
     */
    private $auth;
    public function __construct()
    {
        # code...
        $this->auth = app('auth');
    }
    public function handle($request, Closure $next)
    {
        if (Auth()->check() && $request->user()->admin == admin) {
           # code...
            return $next($request);
        }

        return redirect('login')->withErrors('Silahkan Login terlebih dahulu');
    }
}
