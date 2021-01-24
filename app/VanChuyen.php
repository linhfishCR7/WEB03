<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class VanChuyen extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'vc_taoMoi';
    const     UPDATED_AT    = 'vc_capNhat';

    protected $table        = 'vanchuyen';
    protected $fillable     = ['vc_ten', 'vc_chiPhi', 'vc_dienGiai', 'vc_taoMoi', 'vc_capNhat', 'vc_trangThai','delete_at'];
    protected $guarded      = ['vc_ma'];

    protected $primaryKey   = 'vc_ma';

    protected $dates        = ['vc_taoMoi', 'vc_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
