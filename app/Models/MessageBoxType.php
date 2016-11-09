<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBoxType extends Model {

    /**
     * Generated
     */

    protected $table = 'message_box_type';
    protected $fillable = ['id', 'type_name'];
    public $timestamps=false;


    public function tblMessageBoxes() {
        return $this->hasMany(\Venue\Models\TblMessageBox::class, 'box_type_id', 'id');
    }


}
