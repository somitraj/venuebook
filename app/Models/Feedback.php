<?php namespace Venue\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

    /**
     * Generated
     */

    protected $table = 'feedback';
    protected $fillable = ['idfeedback', 'first_name', 'last_name', 'email', 'comment'];
    public $timestamps=false;



}
