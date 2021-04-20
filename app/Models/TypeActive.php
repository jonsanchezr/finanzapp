<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeActive extends Model
{
	protected $table = 'type_active';
	
    protected $fillable = [
    	'name',
    ];
}
