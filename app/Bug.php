<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    protected $table='Bug';
    public function bug_project(){
        return $this->belongsTo('App\project','project_id','id');
    }
}
