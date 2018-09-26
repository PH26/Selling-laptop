<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $guarded =[];
    public function images()
    {
        return $this->hasMany('App\Image','product_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function order_details()
    {
        return $this->hasMany('App\Order_detail','product_id');
    }
    public function product_details()
    {
        return $this->hasMany('App\Product_details','product_id');
    }
}
