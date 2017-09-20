@extends('master.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="page-title">How did you track?</div>
            <div class="benchmark-form">
                <p class="center-block">{{$link}}</p>
                <p class="center-block">{{$projects}}</p>
                <!--@foreach ($projects as $p)
                <p class="center-block">{{ $p->project_name }}</p>
                @endforeach-->
            </div>
        </div>
    </div>
</div>

@endsection
