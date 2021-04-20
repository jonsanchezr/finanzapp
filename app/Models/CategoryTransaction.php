<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTransaction extends Model
{
	protected $table = 'category_transaction';
	
    protected $fillable = [
    	'type_transaction_id',
    	'name',
    ];

    public function subCategories()
    {
        return $this->hasMany('App\Models\SubcategoryTransaction');
    }

    public function type()
    {
    	return $this->belongsTo(TypeTransaction::class, 'type_transaction_id');
    }
}
