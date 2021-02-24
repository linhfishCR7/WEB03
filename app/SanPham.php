<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class SanPham extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'sp_taoMoi';
    const     UPDATED_AT    = 'sp_capNhat';

    protected $table        = 'sanpham';
    protected $fillable     = ['sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh', 'sp_thongTin', 'sp_danhGia', 'sp_taoMoi', 'sp_capNhat', 'sp_trangThai', 'l_ma','delete_at'];
    protected $guarded      = ['sp_ma'];

    protected $primaryKey   = 'sp_ma';

    protected $dates        = ['sp_taoMoi', 'sp_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function loaisanpham()
    {
        return $this->belongsTo('App\Loai', 'l_ma', 'l_ma');
    }

    public function hinhanhlienquan()
    {
        return $this->hasMany('App\HinhAnh', 'sp_ma', 'sp_ma');
    }
    public function chiTietNhap()
    {
        return $this->hasMany('App\ChiTietNhap', 'sp_ma', 'sp_ma');
    }

}
