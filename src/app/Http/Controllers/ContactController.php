<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
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
            'firstname','lastname','gender','email','postcode','address','building_name','opinion'
        ]);
        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact=[
            'fullname'=>$request->firstname . "　" . $request->lastname,
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
        $contacts=Contact::Paginate(10);
        return view('admin',['contacts'=>$contacts]);
    }

    public function search()
    {
        $contacts=Contact::Paginate(10);
        
    }

    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
