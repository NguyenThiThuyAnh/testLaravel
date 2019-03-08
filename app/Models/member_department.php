<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member_department extends Model
{
    protected $table='member_department';
    protected $fillable = ['id','name','id_branch','permission'];
    public function user(){
        return $this->hasMany('App\Models\user','id_department','id');
    }
}
