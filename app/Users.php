<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    public function job_user(){
        return $this->hasOne('App\job','user_id','id');
    }
}
