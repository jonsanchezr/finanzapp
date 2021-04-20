<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
	protected $table = "type_transaction";

	const INCOME = 1;
	const EXPENSE = 2;
	const TRANSFER = 3;

    protected $fillable = [
    	'name',
    ];

    public function Categories()
    {
        return $this->hasMany('App\Models\CategoryTransaction');
    }
}
