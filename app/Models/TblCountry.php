<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblCountry extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_countries';
    protected $fillable = ['id', 'name', 'code'];
    public $timestamps=false;


    public function tblProvinces() {
        return $this->hasMany(\Venue\Models\TblProvince::class, 'country_id', 'id');
    }

    public function userInfos() {
        return $this->hasMany(\Venue\Models\UserInfo::class, 'country_id', 'id');
    }

    public function venues() {
        return $this->hasMany(\Venue\Models\Venue::class, 'country_id', 'id');
    }


}
