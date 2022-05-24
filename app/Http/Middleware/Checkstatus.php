<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkstatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$status)
    {
        $your_status = $request->user()->status; 
        if (! in_array($your_status, $status,True)) {
            // Redirect...
            return redirect('/home');  
        }

        return $next($request);
    }
}
