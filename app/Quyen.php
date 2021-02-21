<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Quyen extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'q_taoMoi';
    const     UPDATED_AT    = 'q_capNhat';

    protected $table        = 'quyen';
    protected $fillable     = ['q_ten', 'q_dienGiai', 'q_taoMoi', 'q_capNhat', 'q_trangThai','delete_at'];
    protected $guarded      = ['id'];

    protected $primaryKey   = 'id';

    protected $dates        = ['q_taoMoi', 'q_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function users(){
        return $this->belongsToMany('App\User');
    } 
}
