<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class KhuyenMaiSanPham extends Model
{
    use SoftDeletes; // add soft delete
    const     CREATED_AT    = 'kmsq_taoMoi';
    const     UPDATED_AT    = 'kmsq_capNhat';

    protected $table        = 'khuyenmai_sanpham';
    protected $fillable     = ['kmsp_giaTri', 'kmsq_taoMoi', 'kmsq_capNhat', 'kmsq_trangThai', 'delete_at'];
    protected $guarded      = ['km_ma', 'sp_ma', 'm_ma'];

    protected $primaryKey   = ['km_ma', 'sp_ma', 'm_ma'];

    protected $dates        = ['kmsq_taoMoi', 'kmsq_capNhat', 'delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public    $incrementing = false;
}
