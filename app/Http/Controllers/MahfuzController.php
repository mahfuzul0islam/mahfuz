<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class MahfuzController extends Controller
{
    public function index(){
        return view('mahfuz');
    }
    public function store(Request $request){
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;
        $contacts->save();
        return redirect()->back();
    }
    public function dashboard(){
        return view('dashboard');
    }
}
