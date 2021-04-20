<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{

    protected $fillable = [
    	'motive',
    	'description',
    	'amount',
    	
    ];

}
