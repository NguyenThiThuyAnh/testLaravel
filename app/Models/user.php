<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table='user';
    protected $fillable = ['id','name','email','password','address','phone','gender','facebook_id','google_id','status','id_group','id_department','is_admin','is_company','permission_app','last_visit','remember_token'];
    public function timecard(){
        return $this->hasOne('App\Models\timecard','id_user','id');
    }
    public function company(){
        return $this->hasMany('App\Models\company','id_company','id');
    }
    public function group_user(){
        return $this->hasMany('App\Models\group_user','id_group','id');
    }
    public function member_department(){
        return $this->hasMany('App\Models\member_department','id_department','id');
    }

}
