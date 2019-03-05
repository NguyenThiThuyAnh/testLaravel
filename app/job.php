<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table='job';
    public function job_user(){
        return $this->hasOne('job','user_id','id');
    }

}

