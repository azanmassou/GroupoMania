<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function create()
    {
        return view('contact.create',);
    }
    public function store()
    {
        $data = request()->validate([
            'name'  => 'required||max:20',
            'email'  => 'required|email',
            'message'  => 'required|max:70',
        ]);

        Mail::to('sender@gmail.com')->send(new ContactMail($data));

        return view('contact.create',);
    }
}
