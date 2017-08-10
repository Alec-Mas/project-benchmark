<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/lykmapipo/themify-icons/master/css/themify-icons.css">

</head>
<body>
    <header class="fixed">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="./" title="stratejos" class="main-logo"><img src="img/foot-logo.png" alt="Logo" class="img-responsive logo-black-outline"></a>
                </div>
                <div class="col-sm-9">
                    <nav>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>

</body>
</html>
