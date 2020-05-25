<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

  
    protected $fillable =[
        'username',

    ];
function orders(){
    return $this->hasMany('App\Models\Order');
}
}
