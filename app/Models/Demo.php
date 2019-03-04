<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected  $table = "demo";
    protected $fillable = [
    'id', 'created-at', 'updated-at',
];


}
