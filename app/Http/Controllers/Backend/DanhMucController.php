<?php

namespace App\Http\Controllers\Backend;

use App\DanhMuc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $validatedData = $request->validate([
            'dm_ten' => 'required|unique:danhmuc|max:20',
        ]);
        // $data = array();
        // $data['dm_ten'] = $request->dm_ten;
        // $data['dm_trangThai'] = $request->dm_trangThai;
        // DB::table('danhmuc')->insert($data);
        $danhmuc = new DanhMuc();
        $danhmuc->dm_ten = $request->dm_ten;
        $danhmuc->dm_trangThai = $request->dm_trangThai;
        $danhmuc->dm_taoMoi = Carbon::now();
        $danhmuc->dm_capNhat = Carbon::now();
        $danhmuc->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
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
        $dm = DanhMuc::find($id);
        return response()->json(['data' => $dm], 200); // 200 là mã lỗi

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
        $danhmuc = DanhMuc::where("dm_ma", $id)->first();

        return view('backend.danhmuc.edit')
            ->with('danhmuc', $danhmuc);
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
        $dm = DanhMuc::where("dm_ma",  $id)->first();
        $dm->dm_ten = $request->dm_ten;
        $dm->dm_capNhat = Carbon::now();
        $dm->dm_trangThai = $request->dm_trangThai;
        $dm->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');

        // Điều hướng về trang index
        return redirect()->route('backend.danhmuc.index');
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
