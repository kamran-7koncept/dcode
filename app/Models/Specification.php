<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','connectivity','dimentions','weight','os','sim_support','display_type','resolution','internal_memory','ram','performance','battery','front_camera','back_camera','description'];
    protected $table = 'specifications';

}
