<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table='group';
    public function group_users(){
        return $this->hasOne('App\users','group_id','id');
    }
}
