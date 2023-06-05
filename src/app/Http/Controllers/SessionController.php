<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSes(Request $request)
    {

    }
    public function postSes(Request $request)
    {
        $request->session()->put('contact',$contact);
    }
}
