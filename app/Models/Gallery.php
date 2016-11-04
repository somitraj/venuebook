<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

    /**
     * Generated
     */

    protected $table = 'gallery';
    protected $fillable = ['idgallery', 'cover', 'image1', 'image2', 'image3', 'image4', 'venue_id'];
    public $timestamps=false;


    public function venue() {
        return $this->belongsTo(\Venue\Models\Venue::class, 'venue_id', 'id');
    }


}
