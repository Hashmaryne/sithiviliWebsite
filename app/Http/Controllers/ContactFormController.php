<?php

namespace App\Http\Controllers;


use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

ini_set('max_execution_time', 300);

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        /* $this->valiadate($request, [
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'qualifications' =>'required',
            'comments' => 'min:3'
        ]); */

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'form-message'=>'required',
            
        ]);

        Mail::to('sithivili.project@gmail.com')->send(new ContactFormMail($data));
        return redirect('contact-us')
        ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
