<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = [
        'id',
        'name',
        'slug'
    ];
    public function book(){
        return $this->hasMany('App\Book', 'category_id');
    }
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

