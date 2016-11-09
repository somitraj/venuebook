<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblItemType extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_item_type';
    protected $fillable = ['id', 'item_type'];
    public $timestamps=false;


    public function tblMenuItems() {
        return $this->hasMany(\Venue\Models\TblMenuItem::class, 'item_type_id', 'id');
    }


}
