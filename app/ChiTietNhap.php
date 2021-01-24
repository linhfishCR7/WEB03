<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class ChiTietNhap extends Model
{
    use SoftDeletes; // add soft delete

    const     CREATED_AT    = 'ctn_taoMoi';
    const     UPDATED_AT    = 'ctn_capNhat';

    protected $table        = 'chitietnhap';
    protected $fillable     = ['ctn_soLuong', 'ctn_donGia', 'ctn_taoMoi', 'ctn_capNhat', 'ctn_trangThai', 'delete_at'];
    protected $guarded      = ['pn_ma', 'sp_ma', 'm_ma'];

    protected $primaryKey   = ['pn_ma', 'sp_ma', 'm_ma'];
    protected $dates        = ['ctn_taoMoi', 'ctn_capNhat', 'delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
    public    $incrementing = false;
}
