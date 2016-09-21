<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'username', 'password', 'email', 'user_type_id'];


    public function userType() {
        return $this->belongsTo(\App\Models\UserType::class, 'user_type_id', 'id');
    }


}
