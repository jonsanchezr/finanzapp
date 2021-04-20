<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Active extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'unit',
        'amount',
        'image',
        'category_active_id',
    ];

    public function categoryActive()
    {
        return $this->belongsTo('App\Models\CategoryActive', 'category_active_id');
    }
}
