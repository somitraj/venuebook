<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model {

    /**
     * Generated
     */

    protected $table = 'user_venue';
    protected $fillable = ['id', 'user_id', 'venue_id'];
    public $timestamps = false;


    public function user() {
        return $this->belongsTo(\Venue\Models\User::class, 'user_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\Venue\Models\Venue::class, 'venue_id', 'id');
    }


}
