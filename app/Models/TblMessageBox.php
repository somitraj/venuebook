<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_message_box';
    protected $fillable = ['id', 'user_id', 'box_type_id', 'message_id'];


    public function messageBoxType() {
        return $this->belongsTo(\App\Models\MessageBoxType::class, 'box_type_id', 'id');
    }

    public function tblMessage() {
        return $this->belongsTo(\App\Models\TblMessage::class, 'message_id', 'id');
    }

    public function userType() {
        return $this->belongsTo(\App\Models\UserType::class, 'user_id', 'id');
    }


}
