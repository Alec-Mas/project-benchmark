@extends('master.app')
@section('content')
<div class="container">
    <div id="app">
        <unique-url code="{{$code}}"></unique-url>
        <div class="row">
            <div class="row">
                <div class="page-title">How your project compares</div>
                <div class="page-subtitle">Benchmarking against others</div>
                <div class="benchmark-statistics">
                    <p class="center-block">{{$link}}</p>
                    <div class="table-responsive">
                    <table class="table">
                        <tr>
                          <th class="tg-yw4l">Project #</th>
                          <th class="tg-yw4l">Criteria</th>
                          <th class="tg-yw4l">You</th>
                          <th class="tg-yw4l">Industry: {{$selected->project_industry}}</th>
                          <th class="tg-yw4l">Everyone</th>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">{{$selected->id}}</td>
                          <td class="tg-yw4l">Team Size</td>
                          @if($selected->project_size > number_format($avg_ind_size, 2))
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{$selected->project_size}}</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{$selected->project_size}}</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($avg_ind_size, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_size, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_size, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="4"></td>
                          <td class="tg-yw4l">Duration (days) - Estimated:</td>
                          @if($current_days_expected > number_format($avg_ind_days_expected, 2))
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{$current_days_expected}}</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{$current_days_expected}}</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($avg_ind_days_expected, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_days_expected, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_days_expected, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          @if($current_actual_days > number_format($avg_ind_days_actual, 2))
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{$current_actual_days}}</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{$current_actual_days}}</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($avg_ind_days_actual, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_days_actual, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Over/Under (%)</td>
                          <td class="tg-yw4l">{{number_format($diff_in_days, 2)}}%</td>
                          <td class="tg-yw4l">{{number_format($diff_in_days_ind, 2)}}%</td>
                          <td class="tg-yw4l">{{number_format($diff_in_days_all, 2)}}%</td>
                        </tr>
						<tr>
                          <td class="tg-yw4l">- Comparison (%)</td>
                          <td class="tg-yw4l">-</td>
                          <td class="tg-yw4l">{{number_format($percentAboveInd, 2)}}%</td>
                          <td class="tg-yw4l">{{number_format($percentAboveAll, 2)}}%</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="4"></td>
                          <td class="tg-yw4l">Budget (AUD) - Estimated</td>
                          @if($selected->project_budget > $avg_ind_budget)
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{$selected->project_budget}}</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{$selected->project_budget}}</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($avg_ind_budget, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_budget, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          @if($selected->project_actual_budget > $avg_ind_actual_budget)
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{$selected->project_actual_budget}}</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{$selected->project_actual_budget}}</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($avg_ind_actual_budget, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_actual_budget, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Over/Under (%)</td>
                          @if($selected->project_actual_budget > number_format($over_under_ind, 2))
                          <td class="tg-yw4l" style="background-color: red; color: white;">{{number_format($over_under, 2)}}%</td>
                          @else
                          <td class="tg-yw4l" style="background-color: green; color: white;">{{number_format($over_under, 2)}}%</td>
                          @endif
                          <td class="tg-yw4l">{{number_format($over_under_ind, 2)}}%</td>
                          <td class="tg-yw4l">{{number_format($over_under_all, 2)}}%</td>
                        </tr>
						<tr>
                          <td class="tg-yw4l">- Comparison (%)</td>
                          <td class="tg-yw4l">-</td>
                          <td class="tg-yw4l">{{number_format($budget_ind_comp, 2)}}%</td>
                          <td class="tg-yw4l">{{number_format($budget_all_comp, 2)}}%</td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="page-subtitle">Your projects</div>
                <div class="benchmark-project">
                    <div class="table-responsive">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Name</th>
                                <th>Industry</th>
                                <th>Team</th>
                                <th>Start Date</th>
                                <th>Expected End Date</th>
                                <th>Actual End Date</th>
                                <th>Expected Budget</th>
                                <th>Actual Budget</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($projects as $p)
                        <tr>
							@if ($p->code_id == $selected->code_id)
								<td hidden>{{ $p->id }}</td>
								<td>{{ $p->project_name }}</td>
								<td>{{ $p->project_industry }}</td>
								<td>{{ $p->project_size }}</td>
								<td>{{ $p->project_start }}</td>
								<td>{{ $p->project_end }}</td>
								<td>{{ $p->project_actual_end }}</td>
								<td>{{ $p->project_budget }}</td>
								<td>{{ $p->project_actual_budget }}</td>
								<td>
									<!--<a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span></a>
									<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>-->
								</td>
							</tr>
							@endif
                        @endforeach

                    </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg pull-right" style="background-color: #F57421; border-color: white;"><a href="{{url('/')}}" style="color: white;">Add Another Project</a></button>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
