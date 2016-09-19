<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model {

    /**
     * Generated
     */

    protected $table = 'user_venue';
    protected $fillable = ['id', 'user_id', 'venue_id'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }


}
