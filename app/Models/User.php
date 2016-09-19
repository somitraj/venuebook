<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'username', 'password', 'email', 'user_type_id'];


    public function userType() {
        return $this->belongsTo(\App\Models\UserType::class, 'user_type_id', 'id');
    }

    public function venues() {
        return $this->belongsToMany(\App\Models\Venue::class, 'user_venue', 'user_id', 'venue_id');
    }

    public function tblBookings() {
        return $this->hasMany(\App\Models\TblBooking::class, 'user_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\App\Models\UserInfo::class, 'user_id', 'id');
    }

    public function userVenues() {
        return $this->hasMany(\App\Models\UserVenue::class, 'user_id', 'id');
    }


}
