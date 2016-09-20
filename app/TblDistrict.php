<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblDistrict extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_district';
    protected $fillable = ['id', 'name', 'code', 'zone_id'];


    public function tblZone() {
        return $this->belongsTo(\App\Models\TblZone::class, 'zone_id', 'id');
    }


}
