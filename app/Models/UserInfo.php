<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

    /**
     * Generated
     */

    protected $table = 'user_info';
    protected $fillable = ['id', 'user_id', 'first_name', 'last_name', 'username', 'dob', 'email', 'nationality_id', 'phone_no', 'mobile_no', 'country_id', 'province_id', 'zone_id', 'district_id', 'locality', 'profile_image', 'identity_image', 'status_id'];
    public $timestamps=false;


    public function tblCountry() {
        return $this->belongsTo(\Venue\Models\TblCountry::class, 'country_id', 'id');
    }

    public function tblDistrict() {
        return $this->belongsTo(\Venue\Models\TblDistrict::class, 'district_id', 'id');
    }

    public function tblProvince() {
        return $this->belongsTo(\Venue\Models\TblProvince::class, 'province_id', 'id');
    }

    public function status() {
        return $this->belongsTo(\Venue\Models\Status::class, 'status_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Venue\Models\User::class, 'user_id', 'id');
    }

    public function tblZone() {
        return $this->belongsTo(\Venue\Models\TblZone::class, 'zone_id', 'id');
    }


}
