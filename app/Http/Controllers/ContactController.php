<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\MessageSent;
use App\Resources\Views;
use Mail;
use App\Mail\ContactMailable;

class ContactController extends Controller
{
    public function show()
    {
    	return view('pages.contact');
    }
    public function create(Request $request)
    {
    	$this->validate($request, ['email' => 'required|email']);
       
        Mail::send(new ContactMailable($request));
       
        return  back()->with('flash-message','Your message has been sent.');
    }
}
