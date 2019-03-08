<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table='branch';
    protected $fillable = ['id','id_company','name','address','phone','email','tax_code','type','longitude','latitude','is_del'];
    public function company(){
        return $this->hasMany('App\Models\company','id_company','id');
    }
    public function member_department(){
        return $this->hasMany('App\Models\member_department','id_branch','id');
    }
    public function shift(){
        return $this->hasMany('App\Models\shift','id_branch','id');
    }

}
