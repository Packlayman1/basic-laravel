<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        if($request->user!='pack'){
            return redirect(route('home'));
        }

        // if($request->age<=18){
        //     return redirect(route('home'));
        // }
        return $next($request);
    }
}
