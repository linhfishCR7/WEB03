<?php

namespace App\Http\Controllers\Backend;
use App\Quyen;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsquyen = Quyen::paginate(5); 
        return view('backend.quyen.index')
            ->with('danhsachquyen', $dsquyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.quyen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $quyen = new Quyen();
        $quyen->q_ten = $request->q_ten;
        $quyen->q_dienGiai = $request->q_dienGiai;
        $quyen->q_trangThai = $request->q_trangThai;
        $quyen->q_taoMoi = Carbon::now();
        $quyen->save();

        $request->session()->flash('alert-success', 'Thêm thành công');
        //điều hướng
        return redirect(route('backend.quyen.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $q = Quyen::find($id);
        return response()->json(['data'=>$q],200); // 200 là mã lỗi

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $q = Quyen::where("id", $id)->first();
        return view('backend.quyen.edit')
            ->with('q', $q);
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
        $q = Quyen::where("id",  $id)->first();
        $q->q_ten = $request->q_ten;
        $q->q_dienGiai = $request->q_dienGiai;
        $q->q_capNhat = Carbon::now();
        $q->q_trangThai = $request->q_trangThai;
        $q->save();

        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');
        // Điều hướng về trang index
        return redirect()->route('backend.quyen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quyen = Quyen::find($id);
        $quyen->delete();
        return redirect()->route('backend.quyen.index');
    }
}
