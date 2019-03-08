<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table=' payment';
    protected $fillable = ['id','id_package','id_company','due_date','time_pay'];
    public function company(){
        return $this->hasMany('App\Models\company','id_company','id');
    }
}
