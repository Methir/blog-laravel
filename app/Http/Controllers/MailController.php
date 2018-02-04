<?php

namespace App\Http\Controllers;

use App\Mail\TellUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('new-mail');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'subject' => 'required',
        ]);
        
        Mail::to($request->user())->send(new TellUs($request->subject, $request->message));
        
        return back();
    }
}
