<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblMenuItem extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_menu_items';
    protected $fillable = ['id', 'item_name'];


    public function venues() {
        return $this->belongsToMany(\App\Models\Venue::class, 'venue_menu_items', 'menu_item_id', 'venue_id');
    }

    public function venueMenuItems() {
        return $this->hasMany(\App\Models\VenueMenuItem::class, 'menu_item_id', 'id');
    }


}
