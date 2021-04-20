<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{	
    protected $fillable = [
    	'type_transaction_id',
    	'subcategory_transaction_id',
 		'beneficiary_id',
		'bank_id',
		'bankto_id',
		'amount',
		'note',
		'created',
    ];

    public function type()
    {
    	return $this->belongsTo(TypeTransaction::class, 'type_transaction_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubcategoryTransaction::class, 'subcategory_transaction_id');
    }

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}