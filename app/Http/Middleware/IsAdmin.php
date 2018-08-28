<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class IsAdmin
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
        $rule=UserType::find(Auth::user()->type_id)->designation;
        if ($rule == 'admin'){
            return $next($request);
        }
        return redirect('/');
    }
}
