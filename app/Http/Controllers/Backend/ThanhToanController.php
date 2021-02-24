<?php

namespace App\Http\Controllers\Backend;
use App\ThanhToan;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsthanhToan = ThanhToan::paginate(5); 
        return view('backend.thanhtoan.index')
            ->with('danhsachthanhtoan', $dsthanhToan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.thanhtoan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $thanhtoan = new ThanhToan();
        $thanhtoan->tt_ten = $request->tt_ten;
        $thanhtoan->tt_dienGiai = $request->tt_dienGiai;
        $thanhtoan->tt_trangThai = $request->tt_trangThai;
        $thanhtoan->tt_taoMoi = Carbon::now();
        $thanhtoan->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
        //điều hướng
        return redirect(route('backend.thanhtoan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tt = ThanhToan::find($id);
        return response()->json(['data'=>$tt],200); // 200 là mã lỗi

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tt = ThanhToan::where("tt_ma", $id)->first();
        return view('backend.thanhtoan.edit')
            ->with('tt', $tt);
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
        $tt = ThanhToan::where("tt_ma",  $id)->first();
        $tt->tt_ten = $request->tt_ten;
        $tt->tt_dienGiai = $request->tt_dienGiai;
        $tt->tt_capNhat = Carbon::now();
        $tt->tt_trangThai = $request->tt_trangThai;
        $tt->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');
        // Điều hướng về trang index
        return redirect()->route('backend.thanhtoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thanhtoan = ThanhToan::find($id);
        $thanhtoan->delete();
        return redirect()->route('backend.thanhtoan.index');
    }
}
