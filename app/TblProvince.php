<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblProvince extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_provinces';
    protected $fillable = ['id', 'name', 'code', 'country_id'];


    public function tblCountry() {
        return $this->belongsTo(\App\Models\TblCountry::class, 'country_id', 'id');
    }


}
