<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSale extends Model
{
	protected $table = "type_sale";

    protected $fillable = [
    	'name',
    ];
}
