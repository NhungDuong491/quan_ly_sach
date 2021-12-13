<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $fillable = [
        'id',
        'user_id',
        'cus_id',
        'total',
        'date',
    ];
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function customer(){
        return $this->belongsTo('App\Customer', 'cus_id');
    }
    public function order_detail(){
        return $this->hasMany('App\Order_detail', 'order_id');
    }
}
