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

    <link href="{{ asset('css/media.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scripts -->
    <script>
        window.Laravel = {
            !!json_encode([
                'csrfToken' => csrf_token(),
            ]) !!
        };
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
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
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

            <script>
                window.trans = <?php
                // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
                $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
                $trans = [];
                foreach ($lang_files as $f) {
                    $filename = pathinfo($f)['filename'];
                    $trans[$filename] = trans($filename);
                }
                echo json_encode($trans);
                ?>;
            </script>
        </header>
        <!--/. header ends-->

        <div class="mobile-nav">
            <a href="#" title="nOps" class="main-logo"><img src="{{ asset('img/foot-logo.png') }}" alt="Logo"></a>
            <a id="primary-nav-trigger" href="javascript:void(0);">
                <span></span><span></span><span></span><span></span>
            </a>
        </div>

        <nav class="primary-nav">
            <div class="container">
                <div class="row">
                    <ul class="col-sm-12 col-xs-12">
                        <h3>Product</h3>
                        <li><a href="javascript:void(0);" title="Pricing">How it works</a></li>
                        <li><a href="#" title="About">About</a></li>
                        <li><a href="{{ url('/login') }}" rel="nofollow" title="Login">Login</a></li>
                        <li><a href="{{ url('/register') }}" rel="nofollow" title="Sign up">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>