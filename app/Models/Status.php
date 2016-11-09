<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

    /**
     * Generated
     */

    protected $table = 'status';
    protected $fillable = ['id', 'status_name'];
    public $timestamps=false;


    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'status_id', 'id');
    }

    public function userVenues() {
        return $this->hasMany(\Venue\Models\UserVenue::class, 'status_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'status_id', 'id');
    }


}
