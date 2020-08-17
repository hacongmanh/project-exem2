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
        $email = $request->getSession()->get('email');
        $role= $request->getSession()->get('role');
        if($email == null){
            $request->getSession()->flash('msg', 'Please login to continue!');
            return redirect('/logins');
        }
        if ($role != 2){
            $request->getSession();
            return redirect('/homes');
        };
        return $next($request);
    }
}
