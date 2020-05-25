<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable =[
        'name',
        'desc',
        'price',
        'brand_id'
    ];
  //  protected $hidden = [

  //      'remember_token',
 //   ];
    function orderdetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }
    function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }
}
