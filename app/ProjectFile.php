<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    protected $table = 'project_file';

    public function project_file_project()
    {
        return $this->belongsTo('App\project', 'project_id', 'id');
    }
}
