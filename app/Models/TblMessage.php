<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblMessage extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_messages';
    protected $fillable = ['id', 'title', 'body'];


    public function tblMessageBoxes() {
        return $this->hasMany(\App\Models\TblMessageBox::class, 'message_id', 'id');
    }


}
