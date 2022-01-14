<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table='reviews';
    
    public $primaryKey='review_id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
