<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class ChuDe extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'cd_taoMoi';
    const     UPDATED_AT    = 'cd_capNhat';

    protected $table        = 'chude';
    protected $fillable     = ['cd_ten', 'cd_taoMoi', 'cd_capNhat', 'cd_trangThai','delete_at'];
    protected $guarded      = ['cd_ma'];

    protected $primaryKey   = 'cd_ma';

    protected $dates        = ['cd_taoMoi', 'cd_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
