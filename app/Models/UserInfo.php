<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

    /**
     * Generated
     */

    protected $table = 'user_info';
    protected $fillable = ['id', 'user_id', 'first_name', 'last_name', 'date_of_birth', 'nationality_id', 'phone_no', 'mobile_no', 'country_id', 'province_id', 'zone_id', 'district_id', 'locality', 'profile_image', 'identity_image'];



}
