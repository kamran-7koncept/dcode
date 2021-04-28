<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'overview_img','sleek_img'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
