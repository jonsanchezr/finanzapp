<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{	
    protected $fillable = [
		'name',
    	'amount',
		'serial',
		'lastname',
    ];
}