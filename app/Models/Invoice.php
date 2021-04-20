<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{	
    protected $fillable = [
    	'serial',
 		'from_name',
		'from_country',
		'from_state',
		'from_city',
		'from_address',
		'from_phone',
		'from_mail',
		'image',
    ];
}