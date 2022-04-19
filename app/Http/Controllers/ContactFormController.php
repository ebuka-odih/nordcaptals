<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('pages.contact');
    }

    public function store(){

        $data = request()->validate([
            "name" => "required",
            "email" => "required|email",
            "mobile" => "nullable",
            "message" => "required",
        ]);
        Mail::to('admin@airlinetrades.com')->send(new ContactFormMail($data));
        return redirect()->back()->with("message", "Thanks for your message. We'll be in touch");
    }
}
