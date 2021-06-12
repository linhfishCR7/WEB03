<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;

class NewFrontendController extends Controller
{
    
    public function index()
    {
        
        return view('frontend.it-startups.pages.home');
    }

    public function contact()
    {
        
        return view('frontend.it-startups.pages.contact');
    }
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('linhfish10c1@gmail.com')->send(new ContactMailer($input));
        // return view('frontend.westeros.pages.contact');
    }
}
