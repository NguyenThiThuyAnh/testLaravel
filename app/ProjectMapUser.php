<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMapUser extends Model
{
    protected $table='project_map_user';
    public function project_map_user_users(){
        return $this->belongsTo('App\users','user_id','id');
    }
    public function project_map_user_project(){
        return $this->belongsTo('App\project','project_id','id');
    }
}
s