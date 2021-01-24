<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete
class DanhMuc extends Model
{
    use SoftDeletes;// add soft delete
    const     CREATED_AT    = 'dm_taoMoi';        
    const     UPDATED_AT    = 'dm_capNhat';


    protected $table        = 'danhmuc';
    protected $fillable     = ['dm_ten', 'dm_taoMoi', 'dm_capNhat', 'dm_trangThai','delete_at'];
    protected $guarded      = ['dm_ma'];

    protected $primaryKey   = 'dm_ma';

    protected $dates        = ['dm_taoMoi', 'dm_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function loais()
    {
        return $this->hasMany('App\Loai', 'dm_ma', 'dm_ma');
    }
}
