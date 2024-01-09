<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }

    public function form(){
        return view('form');
    }

    public function sendEmail(Request $request){
        Mail::to($request->email)->send(new ConfirmationEmail());
        return redirect()->route('home')->with('success', 'Email inviata con successo!');
    }
}
