<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Loai extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'l_taoMoi';
    const     UPDATED_AT    = 'l_capNhat';

    protected $table        = 'loai';
    protected $fillable     = ['l_ten', 'l_taoMoi', 'l_capNhat', 'l_trangThai','delete_at','dm_ma'];
    protected $guarded      = ['l_ma'];

    protected $primaryKey   = 'l_ma';

    protected $dates        = ['l_taoMoi', 'l_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function danhmuc()
    {
        return $this->belongsTo('App\DanhMuc', 'dm_ma', 'dm_ma');
    }

    public function sanPhams()
    {
        return $this->hasMany('App\SanPham', 'l_ma', 'l_ma');
    }
}
