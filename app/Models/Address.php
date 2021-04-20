<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{	
	protected $table = "addresses";

    protected $fillable = [
    	'country',
		'state',
		'city',
		'address_1',
		'address_2',
		'postal_code',
    ];
}