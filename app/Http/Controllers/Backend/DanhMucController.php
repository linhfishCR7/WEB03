<?php

namespace App\Http\Controllers\Backend;
use App\DanhMuc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
        $dsdanhMuc = DanhMuc::all(); // SELECT * FROM danhmuc

        // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
        // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
        // Hiển thị view `backend.danhmuc.index`
        return view('backend.danhmuc.index')
            // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachdanhmuc`
            ->with('danhsachdanhmuc', $dsdanhMuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dm_ten = $request->dm_ten;
        $dm_trangThai = $request->dm_trangThai;
        
        $danhmuc = new DanhMuc();
        $danhmuc->dm_ten = $dm_ten;
        $danhmuc->dm_trangThai = $dm_trangThai;
        $danhmuc->dm_taoMoi = Carbon::now();
        $danhmuc->dm_capNhat = Carbon::now();
        $danhmuc->save();

        $request->session()->flash('alert-success','Thêm thành công');
        //dd($request);
        //điều hướng
        return redirect(route('backend.danhmuc.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $danhmuc = DanhMuc::find($id);
        $danhmuc->delete();
        return redirect()->route('backend.danhmuc.index');

    }
}
