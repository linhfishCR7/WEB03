<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class DonHang extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'dh_taoMoi';
    const     UPDATED_AT    = 'dh_capNhat';

    protected $table        = 'donhang';
    protected $fillable     = ['kh_ma', 'dh_thoiGianDatHang', 'dh_thoiGianNhanHang', 'dh_nguoiNhan', 'dh_diaChi', 'dh_dienThoai', 'dh_nguoiGui', 'dh_loiChuc', 'dh_daThanhToan', 'nv_xuLy', 'dh_ngayXuLy', 'nv_giaoHang', 'dh_ngayLapPhieuGiao', 'dh_ngayGiaoHang', 'dh_taoMoi', 'dh_capNhat', 'dh_trangThai', 'vc_ma', 'tt_ma','delete_at'];
    protected $guarded      = ['dh_ma'];

    protected $primaryKey   = 'dh_ma';

    protected $dates        = ['dh_thoiGianDatHang', 'dh_thoiGianNhanHang', 'dh_ngayXuLy', 'dh_ngayLapPhieuGiao', 'dh_ngayGiaoHang', 'dh_taoMoi', 'dh_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
