<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name', 'project_industry', 'project_size', 'project_start', 'project_end', 'project_actual_end', 'project_budget', 'project_actual_budget', 'code_id'
    ];

}
