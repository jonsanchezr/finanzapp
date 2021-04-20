<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{	
	protected $table = "profile_user";

    protected $fillable = [
    	'user_id',
    	'name',
 		'lastname',
		'username',
		'position',
		'mail',
		'phone',
		'country',
		'state',
		'city',
		'address',
		'start_date',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}