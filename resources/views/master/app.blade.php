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
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/foot-logo.png') }}">
                </a>
            </div>
        </div>
    </nav>
    <div id="wrap">
        @yield('content')
    </div>

    <div class="row" style="padding-top: 50px;"></div>

    <div id="footer">
      <div class="container">
          <p><div class="center-block">Keen to improve performance? Get an AI project management assistant!</div></p>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>

</body>
</html>
