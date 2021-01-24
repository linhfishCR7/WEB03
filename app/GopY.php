<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class GopY extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'gy_taoMoi';
    const     UPDATED_AT    = 'gy_capNhat';

    protected $table        = 'gopy';
    protected $fillable     = ['gy_thoiGian', 'gy_noiDung', 'kh_ma', 'sp_ma', 'gy_taoMoi', 'gy_capNhat', 'gy_trangThai','delete_at'];
    protected $guarded      = ['gy_ma'];

    protected $primaryKey   = 'gy_ma';

    protected $dates        = ['gy_thoiGian','gy_taoMoi', 'gy_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
