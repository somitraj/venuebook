<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {

    /**
     * Generated
     */

    protected $table = 'venues';
    protected $fillable = ['id', 'name', 'image', 'established_date', 'phone_no', 'phone_no_2', 'country_id', 'province_id', 'zone_id', 'district_id', 'locality', 'space_area', 'person_capacity', 'venue_type_id'];


    public function tblCountry() {
        return $this->belongsTo(\App\Models\TblCountry::class, 'country_id', 'id');
    }

    public function tblDistrict() {
        return $this->belongsTo(\App\Models\TblDistrict::class, 'district_id', 'id');
    }

    public function tblProvince() {
        return $this->belongsTo(\App\Models\TblProvince::class, 'province_id', 'id');
    }

    public function venueType() {
        return $this->belongsTo(\App\Models\VenueType::class, 'venue_type_id', 'id');
    }

    public function tblZone() {
        return $this->belongsTo(\App\Models\TblZone::class, 'zone_id', 'id');
    }

    public function users() {
        return $this->belongsToMany(\App\Models\User::class, 'user_venue', 'venue_id', 'user_id');
    }

    public function tblMenuItems() {
        return $this->belongsToMany(\App\Models\TblMenuItem::class, 'venue_menu_items', 'venue_id', 'menu_item_id');
    }

    public function tblBookings() {
        return $this->hasMany(\App\Models\TblBooking::class, 'venue_id', 'id');
    }

    public function userVenues() {
        return $this->hasMany(\App\Models\UserVenue::class, 'venue_id', 'id');
    }

    public function venueMenuItems() {
        return $this->hasMany(\App\Models\VenueMenuItem::class, 'venue_id', 'id');
    }


}
