<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        
        return view('mails.contact');
               
    }

    public function store(Request $request){


        $correo = new ContactMailable($request);

        Mail::to('destinatario@example.com')->send($correo);
        return "Your email was sent succesfully";
        
    }
}
