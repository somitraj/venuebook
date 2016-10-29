<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class VenueType extends Model {

    /**
     * Generated
     */

    protected $table = 'venue_type';
    protected $fillable = ['id', 'type_name'];


    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'venue_type_id', 'id');
    }


}
