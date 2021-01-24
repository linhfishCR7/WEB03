<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class XuatXu extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'xx_taoMoi';
    const     UPDATED_AT    = 'xx_capNhat';

    protected $table        = 'xuatxu';
    protected $fillable     = ['xx_ten', 'xx_taoMoi', 'xx_capNhat', 'xx_trangThai','delete_at'];
    protected $guarded      = ['xx_ma'];

    protected $primaryKey   = 'xx_ma';

    protected $dates        = ['xx_taoMoi', 'xx_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
