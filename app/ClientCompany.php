<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientCompany extends Model
{
    protected $table='client_company';
    public function client_company_project(){
        return $this->belongsTo('App\project','client_company_id','id');
    }
}
