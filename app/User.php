<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',  'user_type', 'ac'
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
