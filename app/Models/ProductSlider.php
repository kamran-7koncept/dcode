<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSlider extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'slider_name','slider_info'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
