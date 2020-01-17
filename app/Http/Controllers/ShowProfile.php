<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('checkage');
        $this->middleware(function($request,$next){
           if($request->cat == "a" || $request->cat == "b"){
               return $next($request);
           }
           return redirect()->route('welcome');
        });
    }

    public function __invoke(Request $request)
    {
        return 'Lay Lay';
    }
}
