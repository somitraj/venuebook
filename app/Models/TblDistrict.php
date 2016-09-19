<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblDistrict extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_district';
    protected $fillable = ['id', 'name', 'code', 'zone_id'];


    public function tblZone() {
        return $this->belongsTo(\App\Models\TblZone::class, 'zone_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\App\Models\UserInfo::class, 'district_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\App\Models\Venue::class, 'district_id', 'id');
    }


}
