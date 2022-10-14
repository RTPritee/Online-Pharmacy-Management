<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\customer; 

class AdminMiddleware
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
       // if(session()->has('logged')){
          //  return $next($request);
       // }
       
       //return redirect()->route('login');
       
       if(Auth::check()){
            
            if(Auth::customer()->type =='Admin') 
            { 
                return $next($request);
                //return redirect()->route('adminDashboard');
            } 
            else
            {
                //return redirect()->back()->with('status','You are not registered as admin');
               return redirect()->route('login')->with('status',' Please login');
           }
        }
        else 
        {
            //return redirect()->back()->with('status','You are not registered as admin');
           return redirect()->route('login')->with('status',' You are not registered as admin');
        }
        
       
    }
    
}
