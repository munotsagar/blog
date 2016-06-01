<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use Illuminate\Http\Response;


class simpleAuthMiddleware
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
        return $next($request);
        //return Auth::onceBasic('username') ?: $next($request);
        //dd($request);
        $credentials = ['username' => 'sagarmunot', 'password' => 'password'];
        //$request->username = "sagarmunot";
        //$request->password = "password";
        //return Auth::validate($credentials) ?: $next($request);
        if(Auth::validate($credentials) == true) {
            return $next($request);
        }else{

        }

        dd($response);
        if($response) {
            return response($response);
        }
    }
}
