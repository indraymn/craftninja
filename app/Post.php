<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='posts';
    
    public $primaryKey='id';

    public $timestamps = true;

    //https://laravel.com/docs/8.x/eloquent-relationships
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function posts(){
        return $this->hasMany('App\Review');
    }
    public function favourites(){
        return $this->hasMany('App\Favourites');
    }
}
