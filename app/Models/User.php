<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'username', 'password', 'email', 'user_type_id'];
    public $timestamps=false;


    public function userType() {
        return $this->belongsTo(\Venue\Models\UserType::class, 'user_type_id', 'id');
    }

    public function tblBookings() {
        return $this->hasMany(\Venue\Models\TblBooking::class, 'user_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'user_id', 'id');
    }

    public function userVenues() {
        return $this->hasMany(\Venue\Models\UserVenue::class, 'user_id', 'id');
    }


}
