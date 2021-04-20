<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{	
    protected $fillable = [
    	'invoice_serial',
 		'client',
		'unit',
		'product',
		'amount',
		'tax',
		'created',
		'image',
    ];
}