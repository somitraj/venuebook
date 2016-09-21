<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessageBox extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_message_box';
    protected $fillable = ['id', 'user_id', 'box_type_id', 'message_id', 'is_read'];



}
