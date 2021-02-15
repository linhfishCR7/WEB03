<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\XuatXu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class XuatXuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsxuatXu = XuatXu::all(); 
        return view('backend.xuatxu.index')
            ->with('danhsachxuatxu', $dsxuatXu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.xuatxu.create');
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
        $xx_ten = $request->xx_ten;
        $xx_trangThai = $request->xx_trangThai;

        $xuatxu = new XuatXu();
        $xuatxu->xx_ten = $xx_ten;
        $xuatxu->xx_trangThai = $xx_trangThai;
        $xuatxu->xx_taoMoi = Carbon::now();
        $xuatxu->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
        //dd($request);
        //điều hướng
        return redirect(route('backend.xuatxu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $xx = XuatXu::find($id);
        return response()->json(['data'=>$xx],200); // 200 là mã lỗi

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $xx = XuatXu::where("xx_ma", $id)->first();
        return view('backend.xuatxu.edit')
            ->with('xx', $xx);
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
        $xx = XuatXu::where("xx_ma",  $id)->first();
        $xx->xx_ten = $request->xx_ten;
        $xx->xx_capNhat = Carbon::now();
        $xx->xx_trangThai = $request->xx_trangThai;
        $xx->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');

        // Điều hướng về trang index
        return redirect()->route('backend.xuatxu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xuatxu = XuatXu::find($id);
        $xuatxu->delete();
        return redirect()->route('backend.xuatxu.index');
    }
}
