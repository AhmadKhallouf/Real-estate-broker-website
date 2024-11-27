<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->user()->active == 1){
        return $next($request);
    }else{
        return redirect('/')->with('message','sorry sir, your account is suspended, please contact with admin to solve the problem...!!!');
    }
    }
}
