<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegionController extends Controller
{
    public function currency(Request $req,$id,$currency)
    {
        $req->session()->put('started',$id);
        return redirect('/');
    }

    public function setCookie(Request $request) {
        $minutes = 1;
        // $response = new Response('Hello World');
        // $response->withCookie(cookie('email', 'virat', $minutes));
        $request->session()->put('cookied', $minutes);
        return redirect('/');
     }
}
