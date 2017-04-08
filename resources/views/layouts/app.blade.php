<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="main-wrapper">
        <header class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="./" title="stratejos" class="main-logo"><img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-responsive logo-black-outline"></a>
                    </div>
                    <div class="col-sm-9">
                        <nav>
                            <ul>
                                <li><a href="javascript:void(0);" title="Features" class="nav-features">How it works</a></li>
                                <li><a href="#" title="About">About</a></li>
                                <li><a href="http://stratejos.ai/blog" title="Blog">Blog</a></li>
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}" rel="nofollow" title="Login">Login</a></li>
                                <li><a href="{{ url('/register') }}" rel="nofollow" title="Sign up" class="free-trial">Sign up</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle free-trial" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
