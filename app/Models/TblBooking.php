<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblBooking extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_booking';
    protected $fillable = ['id', 'date', 'user_id', 'venue_id', 'no_of_person', 'total_amount'];



}
