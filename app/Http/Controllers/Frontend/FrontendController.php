<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //trang chủ tạm thời trỏ về trang thah toán
    public function index()
    {
        return view('frontend.pages.contact');
    }
    //câu hỏi thường gặp
    public function question()
    {
        return view('frontend.pages.blog');
    }
    //câu hỏi thường gặp chi tiết
    public function questionDetail()
    {
        return view('frontend.pages.post');
    }
    //hướng dẫn sử dụng
    public function guideUse()
    {
        return view('frontend.pages.guideUse');
    }
    //riêng tư
    public function private()
    {
        return view('frontend.pages.private');
    }
    //bồi thường
    public function compensation()
    {
        return view('frontend.pages.compensation');
    }
    /** 
     * Action gởi email với các lời nhắn nhận được từ khách hàng 
     * POST /lien-he/goi-loi-nhan 
     */
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('linhfish10c1@gmail.com')->send(new ContactMailer($input));
        // return view('frontend.pages.contact');
    }
}
