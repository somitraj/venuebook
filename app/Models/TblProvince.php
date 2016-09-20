<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class TblProvince extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_provinces';
    protected $fillable = ['id', 'name', 'code', 'country_id'];


    public function tblCountry() {
        return $this->belongsTo(\Venue\Models\TblCountry::class, 'country_id', 'id');
    }


}
