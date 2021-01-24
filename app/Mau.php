<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete


class Mau extends Model
{
    use SoftDeletes;// add soft delete
    const     CREATED_AT    = 'm_taoMoi';        
    const     UPDATED_AT    = 'm_capNhat';


    protected $table        = 'mau';
    protected $fillable     = ['m_ten', 'm_taoMoi', 'm_capNhat', 'm_trangThai','delete_at'];
    protected $guarded      = ['m_ma'];

    protected $primaryKey   = 'm_ma';

    protected $dates        = ['m_taoMoi', 'm_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
