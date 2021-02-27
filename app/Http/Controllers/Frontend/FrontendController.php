<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Loai;
use App\Mau;
use App\Sanpham;
use App\Vanchuyen;
use App\KhachHang;
use App\Donhang;
use App\Thanhtoan;
use App\Chitietdonhang;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMailer;
use App\Mail\OrderMailer;
use Illuminate\Validation\ValidationException;
use PHPUnit\Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\KhachhangCreateRequest;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //trang chủ tạm thời trỏ về trang thah toán
    public function index(Request $request)
    {
        $ds_sanpham = DB::table('loai')
            ->join('sanpham', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('l_capNhat')->get();

        $ds_sanpham_giamdan = DB::table('loai')
            ->join('sanpham', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('sp_ma','DESC')->get();
//dd($ds_sanpham_giamdan);
        // // Query tìm danh sách sản phẩm
        // $danhsachsanpham = $this->searchSanPham($request);

        // // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        // $danhsachhinhanhlienquan = DB::table('hinhanh')
        //     ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        //     ->get();

        // Query danh sách Loại
        $loai = Loai::all();

        // Query danh sách màu
        $danhsachmau = Mau::all();

        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.pages.home')
            ->with('ds_sanpham', $ds_sanpham)
            ->with('ds_sanpham_giamdan', $ds_sanpham_giamdan)
            // ->with('danhsachsanpham', $danhsachsanpham)
            // ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachmau', $danhsachmau)
            ->with('loai', $loai);
    }

    //chi tiết sản phẩm
    public function productDetail(Request $request, $id)
    {
        $sanpham = DB::table('sanpham')
            ->where('sp_ma', $id)
            ->first();
        // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        $danhsachhinhanhlienquan = DB::table('hinhanh')
            ->where('sp_ma', $id)
            ->get();

        // Query danh sách Loại
        $danhsachloai = Loai::all();

        // Query danh sách màu
        $danhsachmau = Mau::all();

        //dd($danhsachhinhanhlienquan);
        return view('frontend.pages.shop.productDetail')
            ->with('sp', $sanpham)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachmau', $danhsachmau)
            ->with('danhsachloai', $danhsachloai);
    }

    //gio hang
    public function cart(Request $request)
    {
        // Query danh sách hình thức vận chuyển
        $danhsachvanchuyen = Vanchuyen::all();

        // Query danh sách phương thức thanh toán
        $danhsachphuongthucthanhtoan = Thanhtoan::all();

        return view('frontend.pages.shop.shopping-cart')
            ->with('danhsachvanchuyen', $danhsachvanchuyen)
            ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);
    }
    public function xacThuc()
    {
        return view('frontend.pages.shop.xacThuc');
    }

    public function register(Request $request)
    {

        // Tạo mới khách hàng
        $khachhang = new Khachhang();
        $khachhang->kh_taiKhoan = $request->khachhang['kh_taiKhoan'];
        $khachhang->kh_matKhau = bcrypt($request->khachhang['kh_matKhau']);
        $khachhang->kh_hoTen = $request->khachhang['kh_hoTen'];
        $khachhang->kh_gioiTinh = $request->khachhang['kh_gioiTinh'];
        $khachhang->kh_email = $request->khachhang['kh_email'];
        $khachhang->kh_ngaySinh = $request->khachhang['kh_ngaySinh'];
        if (!empty($request->khachhang['kh_diaChi'])) {
            $khachhang->kh_diaChi = $request->khachhang['kh_diaChi'];
        }
        if (!empty($request->khachhang['kh_dienThoai'])) {
            $khachhang->kh_dienThoai = $request->khachhang['kh_dienThoai'];
        }
        $khachhang->kh_trangThai = 2; // Khả dụng
        $khachhang->save();
    }

    public function login(Request $request)
    {
        $request->session()->put('data', $request->input());
        return redirect('/profile');
    }

    public function logout(Request $request)
    {
        session()->forget('data');
        return redirect('xac-thuc');
    }
    public function profile(Request $request)
    {
        if (Session::has('data')) {
            $data = array();
            $data = $request->session()->get('data');
            $kh_email = $data['kh_email'];
            //$kh = KhachHang::find($kh_email);
            $kh = KhachHang::where('kh_email', $kh_email)->get();

            //$sql = "SELECT * FROM khachhang where kh_email = '$kh_email'";
            //$kh = DB::select($sql);
            //dd($kh);
            return view('frontend.profile')->with('kh', $kh);
        } else {
            return view('errors.440');
        }

        //dd($kh);
        //$kh = Khachhang::find('$kh_email');

    }

    /**
     * Action Đặt hàng
     */
    public function order(Request $request)
    {
        //session('data')['kh_email'];
        // Data gởi mail
        $dataMail = [];
        try {
            // $kh_email = session('data')['kh_email'];
            // if (!empty($kh_email)) {
            //     $khachhang = Khachhang::find($kh_email);
            //     // Hiển thị câu thông báo 1 lần (Flash session)
            //     $dataMail['khachhang'] = $khachhang->toArray();
            // } else {
            //     $request->session()->flash('alert-info', 'Vui lòng đăng nhập, nếu chưa có tài khoản vui lòng đăng ký');
            //     return redirect('gio-hang');
            // }
            // Tạo mới khách hàng
            $khachhang = new Khachhang();
            $khachhang->kh_taiKhoan = $request->khachhang['kh_taiKhoan'];
            $khachhang->kh_matKhau = bcrypt('123456');
            $khachhang->kh_hoTen = $request->khachhang['kh_hoTen'];
            $khachhang->kh_gioiTinh = $request->khachhang['kh_gioiTinh'];
            $khachhang->kh_email = $request->khachhang['kh_email'];
            $khachhang->kh_ngaySinh = $request->khachhang['kh_ngaySinh'];
            if (!empty($request->khachhang['kh_diaChi'])) {
                $khachhang->kh_diaChi = $request->khachhang['kh_diaChi'];
            }
            if (!empty($request->khachhang['kh_dienThoai'])) {
                $khachhang->kh_dienThoai = $request->khachhang['kh_dienThoai'];
            }
            $khachhang->kh_trangThai = 2; // Khả dụng
            $khachhang->save();
            $dataMail['khachhang'] = $khachhang->toArray();

            // Tạo mới đơn hàng
            $donhang = new Donhang();
            $donhang->kh_ma = $khachhang->kh_ma;
            $donhang->dh_thoiGianDatHang = Carbon::now();
            $donhang->dh_thoiGianNhanHang = $request->donhang['dh_thoiGianNhanHang'];
            $donhang->dh_nguoiNhan = $request->donhang['dh_nguoiNhan'];
            $donhang->dh_diaChi = $request->donhang['dh_diaChi'];
            $donhang->dh_dienThoai = $request->donhang['dh_dienThoai'];
            $donhang->dh_nguoiGui = $request->donhang['dh_nguoiGui'];
            $donhang->dh_loiChuc = $request->donhang['dh_loiChuc'];
            $donhang->dh_daThanhToan = 0; //Chưa thanh toán
            $donhang->nv_xuLy = 1; //Mặc định nhân viên đầu tiên
            $donhang->nv_giaoHang = 1; //Mặc định nhân viên đầu tiên
            $donhang->dh_trangThai = 1; //Nhận đơn
            $donhang->vc_ma = $request->donhang['vc_ma'];
            $donhang->tt_ma = $request->donhang['tt_ma'];
            $donhang->save();
            $dataMail['donhang'] = $donhang->toArray();

            // Lưu chi tiết đơn hàng
            foreach ($request->giohang['items'] as $sp) {
                $chitietdonhang = new Chitietdonhang();
                $chitietdonhang->dh_ma = $donhang->dh_ma;
                $chitietdonhang->sp_ma = $sp['_id'];
                $chitietdonhang->m_ma = 1;
                $chitietdonhang->ctdh_soLuong = $sp['_quantity'];
                $chitietdonhang->ctdh_donGia = $sp['_price'];
                $chitietdonhang->save();
                $dataMail['donhang']['chitiet'][] = $chitietdonhang->toArray();
                $dataMail['donhang']['giohang'][] = $sp;
            }

            // Gởi mail khách hàng
            // dd($dataMail);
            Mail::to($khachhang->kh_email)
                ->send(new OrderMailer($dataMail));
        } catch (ValidationException $e) {
            return response()->json(array(
                'code'  => 500,
                'message' => $e,
                'redirectUrl' => route('frontend.cart')
            ));
        } catch (Exception $e) {
            throw $e;
        }

        return response()->json(array(
            'code'  => 200,
            'message' => 'Tạo đơn hàng thành công!',
            'redirectUrl' => route('frontend.orderFinish')
        ));
    }

    /**
     * Action Hoàn tất Đặt hàng
     */
    public function orderFinish()
    {
        return view('frontend.pages.shop.order-finish');
    }

    //tìm kiếm sản phẩm
    public function timkiem()
    {
        // Hiển thị view Thống kê
        $loai = Loai::all();
        return view('frontend.pages.search-test')->with('loai', $loai);
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
    public function product(Request $request)
    {
        $ds_sanpham = DB::table('loai')
            ->join('sanpham', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('l_capNhat')->paginate(10);

        // // Query tìm danh sách sản phẩm
        // $danhsachsanpham = $this->searchSanPham($request);

        // // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        // $danhsachhinhanhlienquan = DB::table('hinhanh')
        //     ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        //     ->get();

        // Query danh sách Loại
        $loai = Loai::all();

        // Query danh sách màu
        $danhsachmau = Mau::all();

        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.pages.shop.product')
            ->with('ds_sanpham', $ds_sanpham)
            // ->with('danhsachsanpham', $danhsachsanpham)
            // ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachmau', $danhsachmau)
            ->with('loai', $loai);
    }
}
