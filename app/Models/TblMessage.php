<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessage extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_messages';
    protected $fillable = ['id', 'title', 'body'];
    public $timestamps=false;


    public function tblMessageBoxes() {
        return $this->hasMany(\Venue\Models\TblMessageBox::class, 'message_id', 'id');
    }


}
