<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function thongke_3_sanpham_moinhat() {
        // Hiển thị view Thống kê
        return view('backend.thongke.thongke_3_sanpham_moinhat');
    }
    
}
