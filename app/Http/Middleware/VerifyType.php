<?php

namespace App\Http\Middleware;

use Closure;

class VerifyType
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
        if($request->session()->get('usertype') == 'admin'){
            
            return $next($request);
        }
        else if($request->session()->get('usertype') == 'Travel guider'){
            return $next($request);
        }
        else if($request->session()->get('usertype') == 'Traveller'){
            return $next($request);
        }
        else if($request->session()->get('usertype') == 'Hotel Emp'){
            
            return $next($request);
        }
        else{
            return redirect('/travelia');
        }
    }
}
