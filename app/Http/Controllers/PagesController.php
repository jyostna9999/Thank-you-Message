<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('pages.index');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }

    function store(Request $request)
    {
        // dd($request);
        $name = request()-> name;

        /*If we want to pass email also in URL we need this
        $email = request() -> email;*/


        return redirect() -> route('thanks',['name' => $name]);
        //Multiple paramters --
        // return redirect() -> route('thanks',['name' => $name,'email' => $email]);
    }

    function thanks($name, Request $request)
    {
        //dd($request);
        //return view('pages.thankyou')->with(compact('name'));
        return view('pages.thankyou')->with(compact(['name']));
    }

    /*To pass multiple parameters
    function thanks($name,$email)
    {
        return view('pages.thankyou')->with(compact(['name','email']));
    }*/
}
