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
                          <th class="tg-yw4l">Industry</th>
                          <th class="tg-yw4l">Everyone</th>
                        </tr>
                        <tr>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l">Team Size</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="3"></td>
                          <td class="tg-yw4l">Duration - Estimated:</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Over/Under</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" rowspan="3"></td>
                          <td class="tg-yw4l">Budget - Estimated</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Actual</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l">- Over/Under</td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                          <td class="tg-yw4l"></td>
                        </tr>
                    </table>
                </div>
                <div class="benchmark-project">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
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
                            <td>{{ $p->project_name }}</td>
                            <td>{{ $p->project_industry }}</td>
                            <td>{{ $p->project_size }}</td>
                            <td>{{ $p->project_start }}</td>
                            <td>{{ $p->project_end }}</td>
                            <td>{{ $p->project_actual_end }}</td>
                            <td>{{ $p->project_budget }}</td>
                            <td>{{ $p->project_actual_budget }}</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
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
