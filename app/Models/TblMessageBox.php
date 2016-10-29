<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_message_box';
    protected $fillable = ['id', 'user_id', 'box_type_id', 'message_id', 'is_read'];
    public $timestamps=false;


    public function messageBoxType() {
        return $this->belongsTo(\Venue\Models\MessageBoxType::class, 'box_type_id', 'id');
    }

    public function tblMessage() {
        return $this->belongsTo(\Venue\Models\TblMessage::class, 'message_id', 'id');
    }

    public function userType() {
        return $this->belongsTo(\Venue\Models\UserType::class, 'user_id', 'id');
    }


}
