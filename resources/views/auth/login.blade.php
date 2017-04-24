@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Stratejos</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{ asset('img/logo-solo.png') }}"
                    alt="">
                <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>

                    <div class="form-group">
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                        <div class="checkbox pull-right">
                                <a href="#" class="pull-right need-help">Need help? </a>
                                <span class="clearfix"></span>
                        </div>
                    </div>
                </form>
            </div>
            <a href="{{route('register')}}" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
@endsection
