<?php

namespace App\Http\Controllers;

use App\Events\EmailSent;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index(Request $request){
        return view('sendMail');
    }
    public function sendMail(Request $request){
        event(new EmailSent());
    }
}
