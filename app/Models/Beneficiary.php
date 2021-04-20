<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{	
	protected $table = "beneficiaries";

    protected $fillable = [
    	'name',
 		'identification',
		'address',
		'phone',
    ];
}