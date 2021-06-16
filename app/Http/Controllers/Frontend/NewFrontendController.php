<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;
use Carbon\Carbon;
use App\SanPham;
use App\Loai;
use App\HinhAnh;
use App\VanChuyen;
use App\ThanhToan;
use App\Mau;
use Illuminate\Support\Facades\DB;
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
    public function shop(Request $request){
        $ds_sanpham = DB::table('sanpham')->where('sp_trangThai',2)->paginate(9);
        return view('frontend.it-startups.pages.shop')
        ->with('ds_sanpham', $ds_sanpham);
    }
    public function shopDetail(Request $request, $id)
    {
        $sanpham = DB::table('sanpham')->select('sanpham.*','loai.*')
            ->join('loai' , 'sanpham.l_ma', '=', 'loai.l_ma')
            ->where('sanpham.sp_ma', $id)
            ->first();

        $mau = DB::table('sanpham')->select('mau.m_ten')
            ->join('mau_sanpham', 'sanpham.sp_ma', '=', 'mau_sanpham.sp_ma')
            ->join('mau' , 'mau_sanpham.m_ma', '=', 'mau.m_ma')
            ->where('sanpham.sp_ma', $id)
            ->get();
        //$limit = 3 + $id;
        $sql = "SELECT * FROM sanpham JOIN loai ON sanpham.l_ma = loai.l_ma
        WHERE loai.l_ma = (SELECT sanpham.l_ma FROM sanpham WHERE sanpham.sp_ma = $id) AND  sanpham.sp_trangThai = 2 LIMIT 3 ";
       //dd($sql);

        $sanphamlienquan = DB::select($sql);
        //dd($sanphamlienquan);
        return view('frontend.it-startups.pages.shop-detail')
            ->with('sanpham', $sanpham)
            ->with('sanphamlienquan', $sanphamlienquan)
            ->with('mau', $mau);

    }
    public function cart(Request $request)
    {
        $danhsachvanchuyen = Vanchuyen::all();
        $danhsachphuongthucthanhtoan = Thanhtoan::all();
        return view('frontend.it-startups.pages.cart')
            ->with('danhsachvanchuyen', $danhsachvanchuyen)
            ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);
    }
}
