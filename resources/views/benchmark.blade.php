@extends('master.app')
@section('content')
<div class="container">
    <div id="app">
        <unique-url code="{{$code}}"></unique-url>
        <div class="row">
            <div class="row">
                <div class="page-title">How did you track?</div>
                <div class="benchmark-statistics">
                    <p class="center-block">{{$link}}</p>
                    <table class="table table-responsive">
                        <tr>
                          <th class="tg-yw4l">No Team</th>
                          <th class="tg-yw4l">Criteria</th>
                          <th class="tg-yw4l">You</th>
                          <th class="tg-yw4l">Industry: {{$selected->project_industry}}</th>
                          <th class="tg-yw4l">Everyone</th>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">{{$selected->id}}</td>
                          <td class="tg-yw4l">Team Size</td>
                          <td class="tg-yw4l">{{$selected->project_size}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_size, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_size, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="4"></td>
                          <td class="tg-yw4l">Duration (days) - Estimated:</td>
                          <td class="tg-yw4l">{{$current_days_expected}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_days_expected, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_days_expected, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          <td class="tg-yw4l">{{$current_actual_days}}</td>
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
                          <td class="tg-yw4l" rowspan="1"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="4"></td>
                          <td class="tg-yw4l">Budget (AUD) - Estimated</td>
                          <td class="tg-yw4l">{{$selected->project_budget}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_budget, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_budget, 2)}}</td>
                        </tr>						
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          <td class="tg-yw4l">{{$selected->project_actual_budget}}</td>
                          <td class="tg-yw4l">{{number_format($avg_ind_actual_budget, 2)}}</td>
                          <td class="tg-yw4l">{{number_format($avg_all_actual_budget, 2)}}</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Over/Under (%)</td>
                          <td class="tg-yw4l">{{number_format($over_under, 2)}}%</td>
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
                <div class="page-subtitle">Your projects</div>
                <div class="benchmark-project">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
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
								<td>{{ $p->id }}</td>
								<td>{{ $p->project_name }}</td>
								<td>{{ $p->project_industry }}</td>
								<td>{{ $p->project_size }}</td>
								<td>{{ $p->project_start }}</td>
								<td>{{ $p->project_end }}</td>
								<td>{{ $p->project_actual_end }}</td>
								<td>{{ $p->project_budget }}</td>
								<td>{{ $p->project_actual_budget }}</td>
								<td>
									<a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span></a>
									<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							@endif
                        @endforeach

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="benchmark-project">
                    <p><a class="button" href="{{url('/')}}">Add Another Project</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
