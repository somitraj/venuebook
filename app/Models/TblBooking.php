<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblBooking extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_booking';
    protected $fillable = ['id', 'date', 'user_id', 'venue_id', 'no_of_person', 'total_amount'];
    public $timestamps=false;


    public function user() {
        return $this->belongsTo(\Venue\Models\User::class, 'user_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\Venue\Models\Venue::class, 'venue_id', 'id');
    }

    public function tblBookingDetails() {
        return $this->hasMany(\Venue\Models\TblBookingDetail::class, 'booking_id', 'id');
    }


}
