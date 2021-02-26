<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Loai;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function thongke_3_sanpham_moinhat() {
        // Hiển thị view Thống kê
        return view('backend.thongke.thongke_3_sanpham_moinhat');
    }
    public function gallery(){
        $loai = Loai::all();
        $all = DB::table('sanpham')
            ->join('hinhanh', 'hinhanh.sp_ma', '=', 'sanpham.sp_ma')->get();
        $BettaFancy = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',1)
        ->get();
        $BettaGalaxy = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',2)
        ->get();
        $BettaGiant = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',3)
        ->get();
        $BettaHalfmoon = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',4)
        ->get();
        $BettaKoi = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',5)
        ->get();
        $BettaKoinemo = DB::table('loai')
        ->join('sanpham', 'sanpham.l_ma', '=', 'loai.l_ma')
        ->where('loai.l_ma','=',6)
        ->get();
            //dd($BettaFancy);
            return view('backend.thongke.gallery')
            ->with([
                'loai'=> $loai, 
                'all'=>$all,
                'BettaFancy'=>$BettaFancy,
                'BettaGalaxy'=>$BettaGalaxy,
                'BettaGiant'=>$BettaGiant,
                'BettaHalfmoon'=>$BettaHalfmoon,
                'BettaKoi'=>$BettaKoi,
                'BettaKoinemo'=>$BettaKoinemo,
            ]);
    }
    public function profile($id){
        $user = User::find($id);
        //dd($user);
        return view('backend.users.profile')
        ->with('user',$user);
    }
    public function team(){
        $user = User::paginate(6);
        //dd($user);
        return view('backend.users.team')
        ->with('user1',$user);
    }
    public function faqs(){
        return view('backend.users.faqs');
    }
}
