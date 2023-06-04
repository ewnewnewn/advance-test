<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $form=[
            'fullname'=>$request->last_name . "　" . $request->first_name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building_name'=>$request->building_name,
            'opinion'=>$request->opinion,
        ];

        Contact::create($form);
        return view('/confirm');        
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        $contacts=Contact::all();
        return view('admin',['contacts'=>$contacts]);
    }
}
