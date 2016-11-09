<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblZone extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_zones';
    protected $fillable = ['id', 'name', 'code', 'province_id'];
    public $timestamps=false;


    public function tblZone() {
        return $this->belongsTo(\Venue\Models\TblZone::class, 'province_id', 'id');
    }

    public function tblDistricts() {
        return $this->hasMany(\Venue\Models\TblDistrict::class, 'zone_id', 'id');
    }

    public function tblZones() {
        return $this->hasMany(\Venue\Models\TblZone::class, 'province_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'zone_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'zone_id', 'id');
    }


}
