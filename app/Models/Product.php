<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function index(){
        return Product::all();
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function cart(){
        return $this->belongsToMany(category::class);
    }

    public function order_detail(){
        return $this->belongsToMany(order_detail::class);
    }
}