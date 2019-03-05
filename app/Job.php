<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='job';
    public function job_users(){
        return $this->belongsTo('App\users','user_id','id');
    }

}

