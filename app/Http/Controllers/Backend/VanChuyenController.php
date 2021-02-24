<?php

namespace App\Http\Controllers\Backend;
use App\VanChuyen;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VanChuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsvanChuyen = VanChuyen::paginate(5); 
        return view('backend.vanchuyen.index')
            ->with('danhsachvanchuyen', $dsvanChuyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vanchuyen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vanchuyen = new VanChuyen();
        $vanchuyen->vc_ten = $request->vc_ten;
        $vanchuyen->vc_chiPhi = $request->vc_chiPhi;
        $vanchuyen->vc_dienGiai = $request->vc_dienGiai;
        $vanchuyen->vc_trangThai = $request->vc_trangThai;
        $vanchuyen->vc_taoMoi = Carbon::now();
        $vanchuyen->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
        //điều hướng
        return redirect(route('backend.vanchuyen.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vc = VanChuyen::find($id);
        return response()->json(['data'=>$vc],200); // 200 là mã lỗi

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vc = VanChuyen::where("vc_ma", $id)->first();
        return view('backend.vanchuyen.edit')
            ->with('vc', $vc);
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
        $vc = VanChuyen::where("vc_ma",  $id)->first();
        $vc->vc_ten = $request->vc_ten;
        $vc->vc_chiPhi = $request->vc_chiPhi;
        $vc->vc_dienGiai = $request->vc_dienGiai;
        $vc->vc_capNhat = Carbon::now();
        $vc->vc_trangThai = $request->vc_trangThai;
        $vc->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');
        // Điều hướng về trang index
        return redirect()->route('backend.vanchuyen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vanchuyen = VanChuyen::find($id);
        $vanchuyen->delete();
        return redirect()->route('backend.vanchuyen.index');
    }
}
