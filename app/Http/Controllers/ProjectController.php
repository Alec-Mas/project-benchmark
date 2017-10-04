<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project;
use App\Link;

class ProjectController extends Controller
{
    public function Get()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);

        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }

    public function AddProject(Request $request)
    {

        // Extract the form data
        // First tab
        $project_name = $request['s']['name'];
        $project_industry = $request['s']['industry'];
        $project_size = $request['s']['size'];

        $project_start = $request['s']['startdate'];
        $project_start = preg_replace("/\([^)]+\)/","",$project_start);
        $project_start = Carbon::parse($project_start);

        $project_end = $request['s']['enddate'];
        $project_end = preg_replace("/\([^)]+\)/","",$project_end);
        $project_end = Carbon::parse($project_end);

        $project_actual_end = $request['s']['actualdate'];
        $project_actual_end = preg_replace("/\([^)]+\)/","",$project_actual_end);
        $project_actual_end = Carbon::parse($project_actual_end);

        // Second tab
        $project_budget = $request['b']['start'];
        $project_actual_budget = $request['b']['actual'];

        // Final tab
        $email = $request['f']['email'];

        $code_id = null;
        $link = null;

        $exists = Link::where('email', '=', $email);

        if($exists->count() === 1) {
            $code_id = $exists->first()->id;
            $link = $exists->first()->code_id;
        }

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
            'code_id' => $code_id,
        ]);

        return response()->json($link);
    }

    public function CreateLink(Request $request) {

        $email = $request['f']['email'];
        $code_id = null;

        $multiplier = 1000000;

        $exists = Link::where('email', '=', $email);

        if($exists->count() === 1) {
            $code_id = $exists->first()->code_id;
        }
        else
        {
            $created = Link::create(array(
                'email' => $email
            ));

            if($created) {
                $code_id = base_convert($created->id+$multiplier, 10, 36);
                Link::where('id', '=', $created->id)->update(array(
                    'code_id' => $code_id
                ));
            }
        }

        if($code_id) {
            return response()->json($code_id);
        }

        //return view('welcome')
            //->with('global', 'Whoops, something went wrong');
    }

    public function GetReport($code_id) {
        $root = $_SERVER['SERVER_NAME'];

        $link = Link::where('code_id', '=', $code_id);

        $projects = Link::find($link->first()->id)->projects;
        //echo $projects;
        $highest_id = 0;


        // Grab the most recent project created.
        foreach($projects as $value)
            if($value->id >= $highest_id)
                $highest_id = $value->id;

        // Retrieve that project
        $selected = Project::find($highest_id);
		$sid = $selected->{'id'};
		
		//Current Project->
		$current_industry = $selected->{'project_industry'};
		$avg_ind_size = Project::where('project_industry',$current_industry)->avg('project_size');
		$avg_all_size = Project::avg('project_size');
		
		// budgets
		$budget = $selected->{'project_budget'};
		$budget_actual = $selected->{'project_actual_budget'};
		$over_under = ($budget_actual - $budget)/$budget * 100;
		//industry budget
		$avg_ind_budget = Project::where('project_industry',$current_industry)->avg('project_budget');
		$avg_ind_actual_budget = Project::where('project_industry',$current_industry)->avg('project_actual_budget');
		$over_under_ind = ($avg_ind_actual_budget - $avg_ind_budget)/$avg_ind_budget * 100;
		$budget_ind_comp = $over_under - $over_under_ind;
		
		//all budget
		$avg_all_budget = Project::avg('project_budget');
		$avg_all_actual_budget = Project::avg('project_actual_budget');
		$over_under_all = ($avg_all_actual_budget - $avg_all_budget)/$avg_all_budget * 100;
		$budget_all_comp = $over_under - $over_under_all;
		
		//Need the start and expected finish dates of the current project
		$current_start = Project::where('id',$sid)->pluck('project_start');
		$current_end = Project::where('id',$sid)->pluck('project_end');
		$project_actual_end = Project::where('id',$sid)->pluck('project_actual_end');
		
		$current_start_day = substr($current_start,10,2);
		$current_start_month = substr($current_start,7,2);
		$current_start_year = substr($current_start,2,4);
		$current_start_full = $current_start_year ."-". $current_start_month ."-". $current_start_day;
		
		$current_end_day = substr($current_end,10,2);
		$current_end_month = substr($current_end,7,2);
		$current_end_year = substr($current_end,2,4);
		$current_end_full = $current_end_year ."-". $current_end_month ."-". $current_end_day;
		
		$date1 = date_create($current_start_full);
		$date2 = date_create($current_end_full);
		$diff = $date2->diff($date1);
		$current_days_expected = $diff->format('%a');
		
		$current_actual_end_day = substr($project_actual_end,10,2);
		$current_actual_end_month = substr($project_actual_end,7,2);
		$current_actual_end_year = substr($project_actual_end,2,4);
		$current_actual_end_full = $current_actual_end_year ."-". $current_actual_end_month ."-". $current_actual_end_day;

		$date1 = date_create($current_start_full);
		$date2 = date_create($current_actual_end_full);
		$diff = $date2->diff($date1);
		$current_actual_days = $diff->format('%a');
		$diff_in_days = ($current_actual_days - $current_days_expected)/$current_days_expected * 100;
		
		$total_ind_days_expected = 0;
		$total_records = 0;
		$projects = Project::all();

		foreach ($projects as $id)
		{	
			$ind = $id->{'project_industry'};
			if ((string)$current_industry === (string)$ind)
			{
				$start = $id->{'project_start'};
				$end = $id->{'project_end'};

				$start_day = substr($start,8,2);
				$start_month = substr($start,5,2);
				$start_year = substr($start,0,4);
				$start_full = $start_year ."-". $start_month ."-". $start_day;

				$end_day = substr($end,8,2);
				$end_month = substr($end,5,2);
				$end_year = substr($end,0,4);
				$end_full = $end_year ."-". $end_month ."-". $end_day;

				$date1 = date_create($start_full);
				$date2 = date_create($end_full);
				$diff = $date2->diff($date1);
				$days_expected = $diff->format('%a');
			
				$total_ind_days_expected = $total_ind_days_expected + $days_expected;
				$total_records = $total_records + 1;
			}
		}
		$avg_ind_days_expected = ($total_ind_days_expected + $current_days_expected) / ($total_records + 1);
		$total_all_days_expected = 0;
		$total_records = 0;
		foreach ($projects as $id)
		{	
			$start = $id->{'project_start'};
			$end = $id->{'project_end'};

			$start_day = substr($start,8,2);
			$start_month = substr($start,5,2);
			$start_year = substr($start,0,4);
			$start_full = $start_year ."-". $start_month ."-". $start_day;

			$end_day = substr($end,8,2);
			$end_month = substr($end,5,2);
			$end_year = substr($end,0,4);
			$end_full = $end_year ."-". $end_month ."-". $end_day;

			$date1 = date_create($start_full);
			$date2 = date_create($end_full);
			$diff = $date2->diff($date1);
			$days_expected = $diff->format('%a');

			//counters
			$total_all_days_expected = $total_all_days_expected + $days_expected;
			$total_records = $total_records + 1;
		}
		//Now for the total average of all projects
		$avg_all_days_expected = $total_all_days_expected / $total_records ;
		$avg_ind_days_actual = 0;
		$total_ind_days_actual = 0;
		$total_records = 0;
		foreach ($projects as $id)
		{	
			$ind = $id->{'project_industry'};
			if((string)$ind == (string)$current_industry)
			{
				$start = $id->{'project_start'};
				$end = $id->{'project_actual_end'};

				$start_day = substr($start,8,2);
				$start_month = substr($start,5,2);
				$start_year = substr($start,0,4);
				$start_full = $start_year ."-". $start_month ."-". $start_day;

				$end_day = substr($end,8,2);
				$end_month = substr($end,5,2);
				$end_year = substr($end,0,4);
				$end_full = $end_year ."-". $end_month ."-". $end_day;

				$date1 = date_create($start_full);
				$date2 = date_create($end_full);
				$diff = $date2->diff($date1);
				$days_actual = $diff->format('%a');
			
				$total_ind_days_actual = $total_ind_days_actual + $days_actual;
				$total_records = $total_records + 1;
			}
		}
		$avg_ind_days_actual = ($total_ind_days_actual + $current_actual_days) / ($total_records + 1);
		
		$avg_all_days_actual = 0;
		$total_all_days_actual = 0;
		$total_records = 0;
		foreach ($projects as $id)
		{	
			$start = $id->{'project_start'};
			$end = $id->{'project_actual_end'};

			$start_day = substr($start,8,2);
			$start_month = substr($start,5,2);
			$start_year = substr($start,0,4);
			$start_full = $start_year ."-". $start_month ."-". $start_day;

			$end_day = substr($end,8,2);
			$end_month = substr($end,5,2);
			$end_year = substr($end,0,4);
			$end_full = $end_year ."-". $end_month ."-". $end_day;

			$date1 = date_create($start_full);
			$date2 = date_create($end_full);
			$diff = $date2->diff($date1);
			$days_actual = $diff->format('%a');

			//counters
			$total_all_days_actual = $total_all_days_actual + $days_actual;
			$total_records = $total_records + 1;
		}
		//Now for the total average of all projects
		$avg_all_days_actual = $total_all_days_actual / $total_records ;
        // Crunch the numbers
		$diff_in_days_ind = ($avg_ind_days_actual - $avg_ind_days_expected)/$avg_ind_days_expected * 100;
		$diff_in_days_all = ($avg_all_days_actual - $avg_all_days_expected)/$avg_all_days_expected * 100;
		$percentAboveInd = $diff_in_days_ind - $diff_in_days;
		$percentAboveAll = $diff_in_days_all - $diff_in_days;
		
		
        if($link->count() === 1) {
            //return redirect($link->first()->url);
            //echo $link;
            //return view('benchmark', ['link' => $link->first()->email], ['root' => $root], ['projects' => $projects]);
            return view('benchmark')
                ->with(['code' => $code_id])
                ->with(['link' => $link->first()->email])
                ->with(['root' => $root])
                ->with(['selected' => $selected])
                ->with(['projects' => $projects])
				->with(['avg_ind_size' => $avg_ind_size])
				->with(['avg_all_size' => $avg_all_size])
				->with(['current_days_expected' => $current_days_expected])
				->with(['current_actual_days' => $current_actual_days])
				->with(['diff_in_days' => $diff_in_days])
				->with(['avg_ind_days_expected' => $avg_ind_days_expected])
				->with(['avg_all_days_expected' => $avg_all_days_expected])
				->with(['avg_ind_days_actual' => $avg_ind_days_actual])
				->with(['avg_all_days_actual' => $avg_all_days_actual])
				->with(['diff_in_days_ind' => $diff_in_days_ind])
				->with(['diff_in_days_all' => $diff_in_days_all])
				->with(['percentAboveInd' => $percentAboveInd])
				->with(['percentAboveAll' => $percentAboveAll])
				->with(['over_under' => $over_under])
				->with(['avg_ind_budget' => $avg_ind_budget])
				->with(['avg_ind_actual_budget' => $avg_ind_actual_budget])
				->with(['over_under_ind' => $over_under_ind])
				->with(['budget_ind_comp' => $budget_ind_comp])
				->with(['avg_all_budget' => $avg_all_budget])
				->with(['avg_all_actual_budget' => $avg_all_actual_budget])
				->with(['over_under_all' => $over_under_all])
				->with(['budget_all_comp' => $budget_all_comp]);

        }
        //return response()->json($code_id);

        //return view('welcome')
        //->with('email', $link);
    }
}
