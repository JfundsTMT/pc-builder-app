<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PSUProduct extends Model
{
    protected $table = 'psu_products';

    protected $fillable = [
        'product_id',
        'power',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
