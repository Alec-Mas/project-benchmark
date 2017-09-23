@extends('master.app')
@section('content')
<div class="container">
    <div id="app">
        <unique-url code="{{$code}}"></unique-url>
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
            <div class="row">
                <div class="benchmark-form">
                    <p><a class="button" href="{{url('/')}}">Add Another Project</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
