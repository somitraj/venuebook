<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model {

    /**
     * Generated
     */

    protected $table = 'user_venue';
    protected $fillable = ['id', 'user_id', 'venue_id'];



}
