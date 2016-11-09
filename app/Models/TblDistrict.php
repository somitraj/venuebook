<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblDistrict extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_district';
    protected $fillable = ['id', 'name', 'code', 'zone_id'];
    public $timestamps=false;


    public function tblZone() {
        return $this->belongsTo(\Venue\Models\TblZone::class, 'zone_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'district_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'district_id', 'id');
    }


}
