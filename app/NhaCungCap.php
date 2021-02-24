<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class NhaCungCap extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'ncc_taoMoi';
    const     UPDATED_AT    = 'ncc_capNhat';

    protected $table        = 'nhacungcap';
    protected $fillable     = ['ncc_ten', 'ncc_daiDien', 'ncc_diaChi', 'ncc_dienThoai', 'ncc_email', 'ncc_taoMoi', 'ncc_capNhat', 'ncc_trangThai', 'xx_ma','delete_at'];
    protected $guarded      = ['ncc_ma'];

    protected $primaryKey   = 'ncc_ma';

    protected $dates        = ['ncc_taoMoi', 'ncc_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function phieuNhap_ncc()
    {
        return $this->hasMany('App\PhieuNhap', 'ncc_ma', 'ncc_ma');
    }
}
