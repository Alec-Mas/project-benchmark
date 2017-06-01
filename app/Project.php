<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'project_industry', 'project_team', 'project_start', 'project_date_estimate', 'project_date_actual', 'project_budget_estimate', 'project_budget_actual',
    ];
}
