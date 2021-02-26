<?php

namespace App\Http\Controllers\Backend;

use App\ChiTietNhap;
use App\Http\Controllers\Controller;
use App\NhaCungCap;
use App\NhanVien;
use App\PhieuNhap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PhieuNhapController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phieunhap = PhieuNhap::all();

        return view('backend.nhapkho.index')
            ->with('phieunhap', $phieunhap);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ncc = NhaCungCap::all();
        $nv = NhanVien::all();
        return view('backend.sanpham.create')
        ->with('ncc', $ncc)
        ->with('nv', $nv);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tạo mới object SanPham
        $pn = new PhieuNhap();
        $pn->pn_nguoiGiao = $request->pn_nguoiGiao;
        $pn->pn_soHoaDon = $request->pn_soHoaDon;
        $pn->pn_ngayXuatHoaDon = $request->pn_ngayXuatHoaDon;
        $pn->pn_ghiChu = $request->pn_ghiChu;
        $pn->nv_nguoiLapPhieu = $request->nv_nguoiLapPhieu;
        $pn->pn_ngayLapPhieu = $request->pn_ngayLapPhieu;
        $pn->nv_keToan = $request->nv_keToan;
        $pn->pn_ngayXacNhan = $request->pn_ngayXacNhan;
        $pn->nv_thuKho = $request->nv_thuKho;
        $pn->pn_ngayNhapKho = $request->pn_ngayNhapKho;
        $pn->pn_taoMoi = Carbon::now();
        $pn->pn_trangThai = $request->pn_trangThai;
        $pn->ncc_ma = $request->ncc_ma;
        $pn->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-success', 'Thêm thành công');

        // Điều hướng về route index
        return redirect()->route('backend.phieunhap.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pn = PhieuNhap::where("pn_ma", $id)->first();
        $ctn = ChiTietNhap::where("pn_ma", $id)->get();
        return view('backend.nhapkho.show')
            ->with('phieunhap', $pn)
            ->with('chitietnhap', $ctn);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //lấy lại dữ liệu 
        $pn = PhieuNhap::where("pn_ma", $id)->first();
        $ncc = NhaCungCap::all();
        $nv = NhanVien::all();        
        return view('backend.sanpham.edit')
            ->with('pn', $pn)
            ->with('ncc', $ncc)       
            ->with('nv', $nv);

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
        $pn = PhieuNhap::where("pn_ma", $id)->first();
        $pn->pn_nguoiGiao = $request->pn_nguoiGiao;
        $pn->pn_soHoaDon = $request->pn_soHoaDon;
        $pn->pn_ngayXuatHoaDon = $request->pn_ngayXuatHoaDon;
        $pn->pn_ghiChu = $request->pn_ghiChu;
        $pn->nv_nguoiLapPhieu = $request->nv_nguoiLapPhieu;
        $pn->pn_ngayLapPhieu = $request->pn_ngayLapPhieu;
        $pn->nv_keToan = $request->nv_keToan;
        $pn->pn_ngayXacNhan = $request->pn_ngayXacNhan;
        $pn->nv_thuKho = $request->nv_thuKho;
        $pn->pn_ngayNhapKho = $request->pn_ngayNhapKho;
        $pn->pn_capNhat = Carbon::now();
        $pn->pn_trangThai = $request->pn_trangThai;
        $pn->ncc_ma = $request->ncc_ma;
        $pn->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info','Cập nhật thành công');

        // Điều hướng về trang index
        return redirect()->route('backend.phieunhap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $phieunhap = PhieuNhap::find($id);
        $phieunhap->delete();
        $request->session()->flash('alert-danger', 'Xóa ' .$id.' thành công');
        return view('backend.nhapkho.index');
    }
    /**
     * Action hiển thị biểu mẫu xem trước khi in trên Web
     */
    public function print($id)
    {
        $pn = PhieuNhap::where("pn_ma", $id)->first();
        $ctn = ChiTietNhap::where("pn_ma", $id)->get();

        return view('backend.nhapkho.print')
            ->with('phieunhap', $pn)
            ->with('chitietnhap', $ctn);
    }
    
}
