<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblZone extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_zones';
    protected $fillable = ['id', 'name', 'code', 'province_id'];


    public function tblZone() {
        return $this->belongsTo(\App\Models\TblZone::class, 'province_id', 'id');
    }

    public function tblDistricts() {
        return $this->hasMany(\App\Models\TblDistrict::class, 'zone_id', 'id');
    }

    public function tblZones() {
        return $this->hasMany(\App\Models\TblZone::class, 'province_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\App\Models\UserInfo::class, 'zone_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\App\Models\Venue::class, 'zone_id', 'id');
    }


}
