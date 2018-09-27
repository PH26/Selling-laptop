<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
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
            $user=Auth::user();
            if ($user->user_type == 1) {
                return $next($request);
            }else{
                return redirect()->route('admin.getLogin');
            }

        }else{
            return redirect()->route('admin.getLogin');
        }
    }
}
