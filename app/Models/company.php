<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table='timecard';
    protected $fillable = ['id','id_user','action','longitude','latitude','status'];
    public function user(){
        return $this->hasMany('App\Models\user','id_company','id');
    }
    public function payment(){
        return $this->hasMany('App\Models\payment','id_company','id');
    }
    public function notification(){
        return $this->hasMany('App\Models\notification','id_company','id');
    }
}
