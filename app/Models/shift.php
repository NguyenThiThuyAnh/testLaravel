<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    protected $table='shift';
    protected $fillable = ['id','name','start_time','end_time','id_branch'];
    public function branch(){
        return $this->hasMany('App\Models\branch','id_branch','id');
    }
}
