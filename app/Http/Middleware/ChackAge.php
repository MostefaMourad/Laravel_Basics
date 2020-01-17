<?php

namespace App\Http\Middleware;

use Closure;

class ChackAge
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
        if($request->age <= 200){
            return redirect()->route('welcome');
        }
        return redirect()->route('test');
    }
}
