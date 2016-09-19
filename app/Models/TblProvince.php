<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblProvince extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_provinces';
    protected $fillable = ['id', 'name', 'code', 'country_id'];


    public function tblCountry() {
        return $this->belongsTo(\App\Models\TblCountry::class, 'country_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\App\Models\UserInfo::class, 'province_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\App\Models\Venue::class, 'province_id', 'id');
    }


}
