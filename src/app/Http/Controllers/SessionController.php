<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSes(Request $request)
    {
        $firstname=$request->session()->get('firstname');
        $gender=$request->session()->get('gender');
        $email=$request->session()->get('email');
        $postcode=$request->session()->get('postcode');
        $address=$request->session()->get('address');
        $building_name=$request->session()->get('building_name');
        $opinion=$request->session()->get('opinion');
        
        return view('index',[
            'firstname' => $firstname,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $building_name,
            'opinion' => $opinion
        ]);

    }

    public function postSes(Request $request)
    {
        //inputの値を変数に格納
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $gender=$request->input('gender');
        $email=$request->input('email');
        $postcode=$request->input('postcode');
        $address=$request->input('address');
        $building_name=$request->input('building_name');
        $opinion=$request->input('opinion');

        //セッションに値を保存
        $request->session()->put('firstname', $firstname);
        $request->session()->put('lastname', $lastname);
        $request->session()->put('gender', $gender);
        $request->session()->put('email', $email);
        $request->session()->put('postcode', $postcode);
        $request->session()->put('address', $address);
        $request->session()->put('building_name', $building_name);
        $request->session()->put('opinion', $opinion);

        return redirect('index');
    }
}
