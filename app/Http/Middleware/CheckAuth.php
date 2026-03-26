<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // return $next($request);
        //echo "miidleware working";
        
        // if($request->card=="no")
        //     {
        //         return response("You Can not Enter in Exam Hall");
        //     }

        // $middleware->append(AgeCheck::class);


        // $middleware->appendToGroup("checkdata",[Agecheck::class,
    //                                     CountryCheck::class]);
        return $next($request);
    }
}
