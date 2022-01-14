<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','location','locationdetail','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //https://laravel.com/docs/8.x/eloquent-relationships
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function favourites(){
        return $this->hasMany('App\Favourites');
    }
}
