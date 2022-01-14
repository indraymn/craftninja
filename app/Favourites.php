<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    protected $tables = 'favourites';

    public $primaryKey='fav_id';

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->belongsTo('App\Post');
    }


}
