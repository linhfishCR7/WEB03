<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mau;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //c1
        $mau = Mau::all();
        return view('backend.mau.index', compact('mau'));
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
    public function store(Request $request)
    {
        $r = $request->validate([
            'm_ten' => 'required'
        ]);
        // $mauId = $request->m_ma;
        // Mau::updateOrCreate([
        //         'm_ma' => $mauId
        // ], 
        //     [
        //         'm_ten' => $request->m_ten, 
        //         'm_trangThai' => $request->m_trangThai, 
        //         'm_taoMoi' => Carbon::now(), 
        //         'm_capNhat' => Carbon::now()
        //     ]);
        // if (empty($request->m_ma))
        //     $msg = 'Mau entry created successfully.';
        // else
        //     $msg = 'Mau data is updated successfully';
        // return redirect()->route('backend.mau.index')->with('success', $msg);
        $mauId = $request->m_ma;
        $mau = Mau::find($mauId);

        if ($mauId) {

            $mau->m_ten        = $request->m_ten;
            $mau->m_hexan        = $request->hex_colorpicker;

            $mau->m_trangThai  = $request->m_trangThai;
            $mau->m_capNhat    = Carbon::now();
            $mau->save();
            $request->session()->flash('alert-info', 'Cập nhật thành công ^^~!!!');

        } else {
            $mau = new Mau();

            $mau->m_ten        = $request->m_ten;
            $mau->m_hexan        = $request->hex_colorpicker;
            $mau->m_trangThai  = $request->m_trangThai;
            $mau->m_taoMoi     = Carbon::now();
            $mau->m_capNhat    = Carbon::now();

            $mau->save();
            $request->session()->flash('alert-success', 'Thêm thành công');

        }
        return redirect()->route('backend.mau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $where = array('m_ma' => $id);
        $mau = Mau::where($where)->first();
        return Response()->json($mau);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('m_ma' => $id);
        $mau = Mau::where($where)->first();
        return Response()->json($mau);
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
        $mau = Mau::where('m_ma', $id)->delete();
        return Response()->json($mau);
    }
}
