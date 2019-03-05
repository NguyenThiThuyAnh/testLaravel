<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportDaily extends Model
{
    protected $table='report_daily';
    public function report_daily_project(){
        return $this->belongsTo('App\project','project_id','id');
    }
}
