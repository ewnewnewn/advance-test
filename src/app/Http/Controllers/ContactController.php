<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Gender;

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

    public function store(Request $request)
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
        $contacts=Contact::with('gender')->Paginate(10);
        //$contacts=$contacts->paginate(10);
        //dd($contacts);
        return view('admin',['contacts'=>$contacts]);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $start = $request->input('start');
        $finish = $request->input('finish');
        $email = $request->input('email');

        $contacts = Contact::query();

        if ($name || $gender || $start || $finish || $email) {
            if ($name) {$contacts->where('fullname', 'LIKE', "%$name%");}
            if ($gender) {$contacts->where('gender', $gender);}
            if ($start) {$contacts->whereDate('created_at', '>=', $start);}
            if ($finish) {$contacts->whereDate('created_at', '<=', $finish);}
            if ($email) {$contacts->where('email', 'LIKE', "%$email%");}
        };

        $contacts = $contacts->with('gender')->paginate(10);
        //$contacts = $contacts->paginate(10);
        return view('admin', ['contacts' => $contacts]);
    }

    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
