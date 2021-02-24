<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete
class User extends Authenticatable
{
    use Notifiable,
    SoftDeletes;// add soft delete

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','username','genre','birthday','phone','delete_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function quyens(){

        return $this->belongsToMany('App\Quyen');
    } 
    public function hasAnyRoles($roles)
    {
        if($this->quyens()->whereIn('q_ten',$roles)->first()){
            return true;
        }
        return false;
    }
    public function hasRole($role)
    {
        if($this->quyens()->where('q_ten',$role)->first()){
            return true;
        }
        return false;
    }
    public function nhanVienLapPhieu()
    {
        return $this->hasMany('App\PhieuNhap', 'id', 'nv_nguoiLapPhieu');
    }
    public function nhanVienKeToan()
    {
        return $this->hasMany('App\PhieuNhap', 'id', 'nv_keToan');
    }
    public function nhanVienThuKho()
    {
        return $this->hasMany('App\PhieuNhap', 'id', 'nv_thuKho');
    }
}
