<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model {

    /**
     * Generated
     */

    protected $table = 'user_venue';
    protected $fillable = ['id', 'user_id', 'venue_id', 'status_id'];
    public $timestamps=false;


    public function status() {
        return $this->belongsTo(\Venue\Models\Status::class, 'status_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Venue\Models\User::class, 'user_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\Venue\Models\Venue::class, 'venue_id', 'id');
    }


}
