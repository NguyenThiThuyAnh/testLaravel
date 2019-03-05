<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table='skill';
    public function skill_users(){
        return $this->belongsTo('App\users','user_id','id');
    }

}
