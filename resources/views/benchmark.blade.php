@extends('layouts.app') @section('content')
<section class="benefits" id="benefits-section">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1 class="page-title">Project Information [Reports Coming Soon]:</h1>
                <p style="color:white; text-align: center;">What you've told us:</p>
                <div class="row">
                    <table class="table benchmark-table">
                        <thead>
                            <tr style="color:white;">
                                <th>Industry</th>
                                <th>Team-Size</th>
                                <th>Start-Date</th>
                                <th>Estimate-End-Date</th>
                                <th>Actual-End-Date</th>
                                <th>Estimate-Budget</th>
                                <th>Actual-Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:white;">
                                <td>{{$project->id}}</td>
                                <td>{{$project->project_team}}</td>
                                <td>{{$project->project_start}}</td>
                                <td>{{$project->project_date_estimate}}</td>
                                <td>{{$project->project_date_actual}}</td>
                                <td>{{$project->project_budget_estimate}}</td>
                                <td>{{$project->project_budget_actual}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="feature-wrapper">
                        <input type="button" name="Enter Another Project" onclick="location.href='{{ url('') }}'" class="previous action-button" value="Enter Another Project" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection