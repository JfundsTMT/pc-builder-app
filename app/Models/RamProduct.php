<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RAMProduct extends Model
{
    protected $table = 'ram_products';

    protected $fillable = [
        'product_id',
        'ram_type',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
