<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class NhanVien extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'nv_taoMoi';
    const     UPDATED_AT    = 'nv_capNhat';

    protected $table        = 'nhanvien';
    protected $fillable     = ['nv_taiKhoan', 'nv_matKhau', 'nv_hoTen', 'nv_gioiTinh', 'nv_email', 'nv_ngaySinh', 'nv_diaChi', 'nv_dienThoai', 'nv_taoMoi', 'nv_capNhat', 'nv_trangThai', 'q_ma','delete_at'];
    protected $guarded      = ['nv_ma'];

    protected $primaryKey   = 'nv_ma';

    protected $dates        = ['nv_ngaySinh', 'nv_taoMoi', 'nv_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
