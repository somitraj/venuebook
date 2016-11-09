<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblProvince extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_provinces';
    protected $fillable = ['id', 'name', 'code', 'country_id'];
    public $timestamps=false;


    public function tblCountry() {
        return $this->belongsTo(\Venue\Models\TblCountry::class, 'country_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'province_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'province_id', 'id');
    }


}
