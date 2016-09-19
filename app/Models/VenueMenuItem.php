<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VenueMenuItem extends Model {

    /**
     * Generated
     */

    protected $table = 'venue_menu_items';
    protected $fillable = ['id', 'venue_id', 'menu_item_id', 'price', 'price_per'];


    public function tblMenuItem() {
        return $this->belongsTo(\App\Models\TblMenuItem::class, 'menu_item_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }


}
