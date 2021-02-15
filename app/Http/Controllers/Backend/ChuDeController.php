<?php

namespace App\Http\Controllers\Backend;

use App\ChuDe;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChuDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cd = ChuDe::all();
        return view('backend.chude.index', compact('cd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.mau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $cd = new ChuDe();
        $cd->cd_ten        = $request->cd_ten;
        $cd->cd_trangThai  = $request->cd_trangThai;
        $cd->cd_taoMoi     = Carbon::now();
        $cd->save();
        $request->session()->flash('alert-success', 'Thêm thành công');

        return redirect()->route('backend.chude.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $where = array('cd_ma' => $id);
        $cd = ChuDe::where($where)->first();
        return Response()->json($cd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('cd_ma' => $id);
        $cd = ChuDe::where($where)->first();
        return Response()->json($cd);
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
        $cd = ChuDe::where("cd_ma",  $id)->first();
        $cd->cd_ten = $request->cd_ten;
        $cd->cd_capNhat = Carbon::now();
        $cd->cd_trangThai = $request->cd_trangThai;
        $cd->save();
        // Hiển thị câu thông báo 1 lần (Flash session)
        $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');

        // Điều hướng về trang index
        return redirect()->route('backend.chude.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cd = ChuDe::where('cd_ma', $id)->delete();
        return Response()->json($cd);
    }
}
