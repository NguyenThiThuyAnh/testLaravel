<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMapFramework extends Model
{
    protected $table = 'project_map_framework';

    public function project_map_framework_project()
    {
        return $this->belongsTo('App\project', 'project_id', 'id');
    }
    public function project_map_framework_framework()
    {
        return $this->belongsTo('App\framework', 'framework_id', 'id');
    }
}
