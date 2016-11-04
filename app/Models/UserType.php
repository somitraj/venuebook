<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {

    /**
     * Generated
     */

    protected $table = 'user_types';
    protected $fillable = ['id', 'type_name'];
    public $timestamps=false;


    public function tblMessageBoxes() {
        return $this->hasMany(\Venue\Models\TblMessageBox::class, 'user_id', 'id');
    }

    public function users() {
        return $this->hasMany(\Venue\Models\User::class, 'user_type_id', 'id');
    }


}
