<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $table='framework';
    public function framwork_project_map_framework(){
        return $this->hasOne('App\project_map_framework','framework_id','id');
    }

}
