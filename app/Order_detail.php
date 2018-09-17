<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
}
