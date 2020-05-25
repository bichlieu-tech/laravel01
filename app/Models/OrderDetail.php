<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable =[
     'name',
     'price',
     'quautity',
     'total'
    ];
    function order(){
        return $this->belongsTo('App\Models\Order', 'orders_id');
    }
    function product(){
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
