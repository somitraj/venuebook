<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {

    /**
     * Generated
     */

    protected $table = 'venues';
    protected $fillable = ['id', 'name', 'image', 'established_date', 'phone_no', 'phone_no_2', 'country_id', 'province_id', 'zone_id', 'district_id', 'locality', 'space_area', 'person_capacity', 'venue_type_id','hall_charge'];
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

    public function venueType() {
        return $this->belongsTo(\Venue\Models\VenueType::class, 'venue_type_id', 'id');
    }

    public function tblZone() {
        return $this->belongsTo(\Venue\Models\TblZone::class, 'zone_id', 'id');
    }

    public function tblMenuItems() {
        return $this->belongsToMany(\Venue\Models\TblMenuItem::class, 'venue_menu_items', 'venue_id', 'menu_item_id');
    }

    public function galleries() {
        return $this->hasMany(\Venue\Models\Gallery::class, 'venue_id', 'id');
    }

    public function tblBookings() {
        return $this->hasMany(\Venue\Models\TblBooking::class, 'venue_id', 'id');
    }

    public function userVenues() {
        return $this->hasMany(\Venue\Models\UserVenue::class, 'venue_id', 'id');
    }

    public function venueMenuItems() {
        return $this->hasMany(\Venue\Models\VenueMenuItem::class, 'venue_id', 'id');
    }


}
