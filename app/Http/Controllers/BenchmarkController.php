<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Project;
use App\Email;

class BenchmarkController extends Controller
{
    
    public function addProject(Request $request) {
        
        $new_project = new Project;
        $new_project->project_industry = $request['project-industry'];
        $new_project->project_team = $request['project-team'];
        $new_project->project_start = $request['start-date'];
        $new_project->project_date_estimate = $request['end-date'];
        $new_project->project_date_actual = $request['actual-end-date'];
        $new_project->project_budget_estimate = $request['original-budget'];
        $new_project->project_budget_actual = $request['actual-budget'];
        
        $new_project->save();
        
        Email::create([
            'email' => $request['email'],
            'project_id' => $new_project->id,
        ]);
        
        return view('benchmark')
                ->with(['project' => Project::find($new_project->id)]);
    }
}
