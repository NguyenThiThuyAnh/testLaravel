<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class timecard extends Model
{
    protected $table='timecard';
    protected $fillable = ['id','id_user','action','longitude','latitude','status'];
    public function user(){
        return $this->belongsTo('App\Models\user','id_user','id');
    }
}
