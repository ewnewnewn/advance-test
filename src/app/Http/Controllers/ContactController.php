<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact=$request->only([
            'lastname','firstname','gender','email','postcode','address','building_name','opinion'
        ]);
        return view('confirm',compact('contact'));
    }

    public function store(Request $request)
    {
        $contact=[
            'fullname'=>$request->lastname . "　" . $request->firstname,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building_name'=>$request->building_name,
            'opinion'=>$request->opinion,
        ];
        Contact::create($contact);
        return view('thanks');
    }

    public function admin()
    {
        $contacts=Contact::all();
        return view('admin',['contacts'=>$contacts]);
    }
}
