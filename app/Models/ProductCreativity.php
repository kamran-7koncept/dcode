<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCreativity extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'creativity_name','creativity_img'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
