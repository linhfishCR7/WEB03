<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;
use App\Loai;
use App\Mau;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //trang chủ tạm thời trỏ về trang thah toán
    public function index(Request $request)
    {
        $ds_loaisanpham = DB::table('loai')
            ->join('sanpham', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('l_capNhat')->get();

        // // Query tìm danh sách sản phẩm
        // $danhsachsanpham = $this->searchSanPham($request);
        
        // // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        // $danhsachhinhanhlienquan = DB::table('hinhanh')
        //     ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        //     ->get();

        // Query danh sách Loại
        $danhsachloai = Loai::all();
        
        // Query danh sách màu
        $danhsachmau = Mau::all();
        
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.pages.home')
            ->with('ds_loaisanpham', $ds_loaisanpham)
            // ->with('danhsachsanpham', $danhsachsanpham)
            // ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachmau', $danhsachmau)
            ->with('danhsachloai', $danhsachloai);
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
