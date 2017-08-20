<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project;

class ProjectController extends Controller
{
    public function AddProject(Request $request)
    {
        // Extract the form data
        //print_r($request);
        // First tab
        $project_name = $request['s']['name'];
        $project_industry = $request['s']['industry'];
        $project_size = $request['s']['size'];
        $project_start = $request['s']['startdate'];
        $project_end = $request['s']['enddate'];
        $project_actual_end = $request['s']['actualdate'];

        // Second tab
        $project_budget = $request['b']['start'];
        $project_actual_budget = $request['b']['actual'];

        // Final tab
        $email = $request['f']['email'];

        // Create the object
        Project::create([
            'project_name' => $project_name,
            'project_industry' => $project_industry,
            'project_size' => (int)$project_size,
            'project_start' => $project_start,
            'project_end' => $project_end,
            'project_actual_end' => $project_actual_end,
            'project_budget' => (int)$project_budget,
            'project_actual_budget' => (int)$project_actual_budget,
        ]);
    }
}
