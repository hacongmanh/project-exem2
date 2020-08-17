<?php

namespace App\Http\Middleware;

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
        $user_name = $request->getSession()->get('user_name');
        $role= $request->getSession()->get('role');
        if($user_name == null){
            $request->getSession()->flash('msg', 'Please login to continue!');
            return redirect('/logins');
        }
        if ($role != 2){
            $request->getSession();
            return redirect('/logins');
        }
        return $next($request);
    }
}
