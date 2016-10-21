<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblMenuItem extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_menu_items';
    protected $fillable = ['id', 'item_name'];
    public $timestamps= false;

    public function venues() {
        return $this->belongsToMany(\Venue\Models\Venue::class, 'venue_menu_items', 'menu_item_id', 'venue_id');
    }

    public function venueMenuItems() {
        return $this->hasMany(\Venue\Models\VenueMenuItem::class, 'menu_item_id', 'id');
    }


}
