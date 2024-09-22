<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $user = \App\User::where('id', session()->get('logged'))->first();
        if(session()->has('logged')){
        if ($user->role !== "1") {
            return redirect('/');
        }
    }else{
        return redirect('/');
    }
    return $next($request);

        
    }
}
