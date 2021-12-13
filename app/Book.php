<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'author',
        'description',
        'price',
        'quanty',
        'image',
        'slug',
    ];
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function order_detail(){
        return $this->hasMany('App\Order_detail', 'book_id');
    }

}

