<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class KhachHang extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'kh_taoMoi';
    const     UPDATED_AT    = 'kh_capNhat';

    protected $table        = 'khachhang';
    protected $fillable     = ['kh_taiKhoan', 'kh_matKhau', 'kh_hoTen', 'kh_gioiTinh', 'kh_email', 'kh_ngaySinh', 'kh_diaChi', 'kh_dienThoai', 'kh_taoMoi', 'kh_capNhat', 'kh_trangThai','delete_at'];
    protected $guarded      = ['kh_ma'];

    protected $primaryKey   = 'kh_ma';

    protected $dates        = ['kh_ngaySinh', 'kh_taoMoi', 'kh_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
