<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class ThanhToan extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'tt_taoMoi';
    const     UPDATED_AT    = 'tt_capNhat';

    protected $table        = 'thanhtoan';
    protected $fillable     = ['tt_ten', 'tt_dienGiai', 'tt_taoMoi', 'tt_capNhat', 'tt_trangThai','delete_at'];
    protected $guarded      = ['tt_ma'];

    protected $primaryKey   = 'tt_ma';

    protected $dates        = ['tt_taoMoi', 'tt_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
