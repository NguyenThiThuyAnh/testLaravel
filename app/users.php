<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table='users';
    public function job_user(){
        return $this->belongsTo('users','user_id','id');
    }
}
