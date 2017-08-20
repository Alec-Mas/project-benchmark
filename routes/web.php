<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::post('generate-report', 'ProjectController@AddProject');
=======
/*
use Illuminate\Http\Request;

Route::post('/Wizard', function(Request $request) {
    $Project = new \App\Project;
    $Project->name = $request->name;
    $Project->industry = $request->industry;
    $Project->teamSize = $request->size;
	$Project->startDate = $request->startdate;
    $Project->estEndDate = $request->enddate;
    $Project->actEndDate = $request->actualdate;
	$Project->budget = $request->start;
    $Project->actBudget = $request->actual;
    $Project->Email = $request->email;
    $Project->save();
    return redirect('/');
});
*/
>>>>>>> 195650c8495aff77ffc9a7b06bc8841e81c01ba6
