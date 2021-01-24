<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class ChiTietDonHang extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'ctdh_taoMoi';
    const     UPDATED_AT    = 'ctdh_capNhat';

    protected $table        = 'chitietdonhang';
    protected $fillable     = ['ctdh_soLuong', 'ctdh_donGia','ctdh_taoMoi', 'ctdh_capNhat', 'ctdh_trangThai','delete_at'];
    protected $guarded      = ['dh_ma', 'sp_ma', 'm_ma'];

    protected $primaryKey   = ['dh_ma', 'sp_ma', 'm_ma'];
    protected $dates        = ['ctdh_taoMoi', 'ctdh_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public    $incrementing = false;
}
