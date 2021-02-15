<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class HinhAnh extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'ha_taoMoi';
    const     UPDATED_AT    = 'ha_capNhat';

    protected $table        = 'hinhanh';
    protected $fillable     = ['ha_ten','ha_taoMoi', 'ha_capNhat','ha_trangThai','delete_at'];
    protected $guarded      = ['sp_ma', 'ha_stt'];

    protected $primaryKey   = ['sp_ma', 'ha_stt'];

    protected $dates        = ['ha_taoMoi', 'ha_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public    $incrementing = false;

    /**
     * Set the keys for a save update query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(Builder $query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }

        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }

    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }

        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }

        return $this->getAttribute($keyName);
    }
}
