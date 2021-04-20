<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
    	'name',
 		'account',
		'holder',
		'identification',
		'type',
        'email',
		'balance',
    ];
}
