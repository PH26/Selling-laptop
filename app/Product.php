<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'intro', 'price', 'cpu','ram',  'screen', 'screenCard','storage','connect','pin','OS','category_id','quantity','weight','size'
    ];
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
}
