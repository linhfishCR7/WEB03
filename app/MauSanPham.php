<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class MauSanPham extends Model
{
    use SoftDeletes; // add soft delete
    const     CREATED_AT    = 'msq_taoMoi';
    const     UPDATED_AT    = 'msq_capNhat';

    protected $table        = 'mau_sanpham';
    protected $fillable     = ['msp_soluong', 'msq_taoMoi', 'msq_capNhat', 'msq_trangThai', 'delete_at'];
    protected $guarded      = ['sp_ma', 'm_ma'];

    protected $primaryKey   = ['sp_ma', 'm_ma'];
    protected $dates        = ['msq_taoMoi', 'msq_capNhat', 'delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
    public    $incrementing = false;
}
