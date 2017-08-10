@extends('master.app') @section('content')
<div class="container">
    <div class="row">
        <h1 class="page-title">Benchmark your project</h1>
        <h1 class="page-subtitle">Take 2 minutes to see how you compare</h1>
    </div>
    <div class="row">
        <div class="container benchmark-form">
            <div id="form">
                <wizard></wizard>
            </div>
        </div>
    </div>
</div>
@endsection
