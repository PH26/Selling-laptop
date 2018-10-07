<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    protected $fillable = ['id_user', 'token'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
