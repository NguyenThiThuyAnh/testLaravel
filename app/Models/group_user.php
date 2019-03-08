<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class group_user extends Model
{
    protected $table='group_user';
    protected $fillable = ['id','name','permission','is_del'];
    public function user(){
        return $this->hasMany('App\Models\user','id_group','id');
    }
}
