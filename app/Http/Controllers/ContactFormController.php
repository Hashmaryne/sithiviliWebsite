<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
