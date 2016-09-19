<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblCountry extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_countries';
    protected $fillable = ['id', 'name', 'code'];


    public function tblProvinces() {
        return $this->hasMany(\App\Models\TblProvince::class, 'country_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\App\Models\UserInfo::class, 'country_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\App\Models\Venue::class, 'country_id', 'id');
    }


}
