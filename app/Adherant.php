<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherant extends Model
{
	/* 
	* relation with model User
	*/
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
