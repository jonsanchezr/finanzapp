<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryActive extends Model
{
	protected $table = 'category_active';
	
    protected $fillable = [
    	'name',
    ];
}
