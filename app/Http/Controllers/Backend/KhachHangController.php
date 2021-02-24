<?php

namespace App\Http\Controllers\Backend;
use App\KhachHang;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dskhachHang = KhachHang::paginate(5); 
        $dskhachHang = KhachHang::all(); 
        return view('backend.khachhang.index')
            ->with('danhsachkhachhang', $dskhachHang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.khachhang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kh = new KhachHang();
        $kh->kh_taiKhoan = $request->kh_taiKhoan;
        $kh->kh_matKhau = Hash::make($request->kh_matKhau);
        $kh->kh_hoTen = $request->kh_hoTen;
        $kh->kh_gioiTinh = $request->kh_gioiTinh;
        $kh->kh_email = $request->kh_email;
        $kh->kh_ngaySinh = $request->kh_ngaySinh;
        $kh->kh_diaChi = $request->kh_diaChi;
        $kh->kh_dienThoai = $request->kh_dienThoai;
        $kh->kh_trangThai = $request->kh_trangThai;
        $kh->kh_taoMoi = Carbon::now();
        $kh->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
        //điều hướng
        return redirect(route('backend.khachhang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kh = KhachHang::find($id);
        return response()->json(['data'=>$kh],200); // 200 là mã lỗi

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kh = KhachHang::where("kh_ma", $id)->first();
        return view('backend.khachhang.edit')
            ->with('kh', $kh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Tìm object Sản phẩm theo khóa chính
        $kh = KhachHang::where("kh_ma",  $id)->first();
        $kh->kh_taiKhoan = $request->kh_taiKhoan;
        if($kh->kh_matKhau == $request->kh_matKhau){
            $kh->kh_matKhau = $kh->kh_matKhau;
        }
        else{
            $kh->kh_matKhau = Hash::make($request->kh_matKhau);
        }
        $kh->kh_hoTen = $request->kh_hoTen;
        $kh->kh_gioiTinh = $request->kh_gioiTinh;
        $kh->kh_email = $request->kh_email;
        $kh->kh_ngaySinh = $request->kh_ngaySinh;
        $kh->kh_diaChi = $request->kh_diaChi;
        $kh->kh_dienThoai = $request->kh_dienThoai;
        $kh->kh_trangThai = $request->kh_trangThai;
        $kh->kh_capNhat = Carbon::now();
        $kh->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');
        // Điều hướng về trang index
        return redirect()->route('backend.khachhang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $khachHang = KhachHang::find($id);
        $name = $khachHang->kh_hoTen;
        $khachHang->delete();
        $request->session()->flash('alert-danger', 'Xóa tài khoản khách hàng '.$name.' thành công' );
        return redirect()->route('backend.khachhang.index');
    }
}
