<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class HoaDonLe extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'hdl_taoMoi';
    const     UPDATED_AT    = 'hdl_capNhat';

    protected $table        = 'hoadonle';
    protected $fillable     = ['hdl_nguoiMuaHang', 'hdl_dienThoai', 'hdl_diaChi', 'nv_lapHoaDon', 'hdl_ngayXuatHoaDon', 'hdl_taoMoi', 'hdl_capNhat', 'hdl_trangThai', 'dh_ma','delete_at'];
    protected $guarded      = ['hdl_ma'];

    protected $primaryKey   = 'hdl_ma';

    protected $dates        = ['hdl_ngayXuatHoaDon','hdl_taoMoi','hdl_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
