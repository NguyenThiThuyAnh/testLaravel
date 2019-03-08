<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package_service extends Model
{
    protected $table=' package_service';
    protected $fillable = ['id','name','price','time_user','description'];
    public function payment(){
        return $this->hasMany('App\Models\payment','id_package','id');
    }
}
