<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class ChuDeSanPham extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'cdsp_taoMoi';
    const     UPDATED_AT    = 'cdsp_capNhat';

    protected $table        = 'chudesanpham';
    protected $fillable     = ['cdsp_taoMoi', 'cdsp_capNhat', 'cdsp_trangThai','delete_at'];
    protected $guarded      = ['sp_ma', 'cd_ma'];

    protected $primaryKey   = ['sp_ma', 'cd_ma'];

    protected $dates        = ['cdsp_taoMoi', 'cdsp_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
    public    $incrementing = false;
}
