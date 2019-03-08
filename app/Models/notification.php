<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $table='notification';
    protected $fillable = ['id','titile','content','id_company'];
    public function company(){
        return $this->hasMany('App\Models\company','id_company','id');
    }
}
