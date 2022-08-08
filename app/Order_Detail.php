<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
    protected $table = 'order_detail';
    protected $fillable = [
        'id',
        'order_id',
        'book_id',
        'price',
        'quanty',
        'sale',
    ];
    public function order(){
        return $this->belongsTo('App\Order', 'order_id');
    }
    public function book(){
        return $this->belongsTo('App\Book', 'book_id');
    }
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}

