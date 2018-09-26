<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username','name', 'email', 'password', 'phone','address',  'user_type', 'ac'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function user_activations(){
        return $this->hasMany('App\UserActivation');
    }
}
