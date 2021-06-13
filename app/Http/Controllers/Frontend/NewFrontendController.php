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

    public function faq()
    {
        return view('frontend.it-startups.pages.faq');
    }
    public function about()
    {
        return view('frontend.it-startups.pages.about');
    }
    public function team()
    {
        return view('frontend.it-startups.pages.team');
    }
    public function service()
    {
        return view('frontend.it-startups.pages.service');
    }
    public function project()
    {
        return view('frontend.it-startups.pages.project');
    }
}
