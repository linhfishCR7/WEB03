<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function thongke_top3_sanpham_moinhat()
    {

        $ds_top3_newest_loaisanpham = DB::table('sanpham')
            ->join('loai', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('l_capNhat')->take(3)->get();

        return response()->json(array(
            'code'      => 200,
            'result'    => $ds_top3_newest_loaisanpham,
        ));
    }
    public function timkiem(Request $request)
    {

        $loai = $request->keyword_search_by_loai;
        $ten = $request->keyword_search_by_tensanpham;
        $giaTu = $request->keyword_search_by_giatu;
        $giaDen = $request->keyword_search_by_giaden;


        $sql = "SELECT * FROM sanpham WHERE 1=1 ";
        if(!empty($loai)){
            $sql .= " AND l_ma LIKE '%$loai%'";
        }
        if (!empty($ten)) {
            $sql .= " AND sp_ten LIKE '%$ten%'";
        }
        if(!empty($loai)){
            $sql .= " AND sp_giaBan >= $giaTu";
        }
        if (!empty($ten)) {
            $sql .= " AND sp_giaBan <= $giaDen";
        }

        $result = DB::select($sql);
        return response()->json(array(
            'code'  => 200,
            'result' => $result
        ));
    }
}
