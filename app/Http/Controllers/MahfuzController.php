<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class MahfuzController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('mahfuz',compact('comments'));
    }
    public function commentstore(Request $request){
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
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
}
