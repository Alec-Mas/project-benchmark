@extends('layouts.dashboard')

@section('content')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <h1>Dashboard</h1>
    <p>Hi {{Auth::user()->name}}. You are logged in!</p>
    <p>Dashboard features coming soon.</p>
</main>
@endsection
