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
        //print_r($request);
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

    public function CreateLink(Request $request) {

        $email = $request['f']['email'];
        $code = null;

        $multiplier = 1000000;

        $exists = Link::where('email', '=', $email);

        if($exists->count() === 1) {
            $code = $exists->first()->code;
        }
        else
        {
            $created = Link::create(array(
                'email' => $email
            ));

            if($created) {
                $code = base_convert($created->id+$multiplier, 10, 36);
                Link::where('id', '=', $created->id)->update(array(
                    'code' => $code
                ));
            }
        }
        if($code) {
            //return view('welcome')
            //->with('global', 'Your unique URL: <a href="'. action('get', $code) .'">' . action('get', $code) . '</a>');3
            //return view('report');
            return response()->json($code);
        }

        //return view('welcome')
            //->with('global', 'Whoops, something went wrong');
    }

    public function GetReport($code) {
        $root = $_SERVER['SERVER_NAME'];
        $link = Link::where('code', '=', $code);

        if($link->count() === 1) {
            //return redirect($link->first()->url);
            //echo $link;
            return view('benchmark', ['link' => $link->first()->email], ['root' => $root]);
        }
        //return response()->json($code);

        //return view('welcome')
        //->with('email', $link);
    }
}
