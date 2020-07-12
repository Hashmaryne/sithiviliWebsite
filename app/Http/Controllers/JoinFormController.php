<?php

namespace App\Http\Controllers;

use App\Mail\JoinFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

ini_set('max_execution_time', 300);

class JoinFormController extends Controller
{
    public function create()
    {
        return view('index');
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
            'surname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10',
            'qualifications' =>'required',
            'nic' =>'required|min:10|max:10',
            'dob' =>'required',
            'comments' => 'min:3',
        ]);

        Mail::to('sithivili.project@gmail.com')->send(new JoinFormMail($data));
        return redirect('#join-us')
        ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
