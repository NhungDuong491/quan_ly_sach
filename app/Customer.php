<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customer';
    protected $fillable = [
        'id',
        'name',
        'gender',
        'address',
        'email',
        'phone',
      

    ];
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function order(){
        return $this->hasMany('App\Order', 'cus_id');
    }
}
