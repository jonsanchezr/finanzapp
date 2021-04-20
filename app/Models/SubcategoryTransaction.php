<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcategoryTransaction extends Model
{
	protected $table = "subcategory_transaction";

    protected $fillable = [
    	'category_transaction_id',
    	'name',
    ];

    public function categoryTransaction()
    {
    	return $this->belongsTo('App\Models\CategoryTransaction', 'category_transaction_id');
    }
}
