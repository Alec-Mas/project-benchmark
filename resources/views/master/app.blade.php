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
	<link rel = "icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <a class="navbar-header-button" href="https://stratejos.ai/">Learn More</a>
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('img/foot-logo.png') }}">
                </a>
            </div>
            <div class="navbar-text">
                Get an AI Project Management Assistant
            </div>
        </div>
    </nav>
    <div id="wrap">
        @yield('content')
    </div>

    <div class="row" style="padding-top: 50px;"></div>

    <div id="footer">
      <div class="container">
		<div class="center-block">
            <table class="navbar-footer-text">
                <tr>
                    <td>Keen to improve performance? Get an AI project management assistant!</td>
                    <td class="navbar-footer-button" href="https://stratejos.ai/">Learn More</td>
                </tr>
            </table>
        </div>
        <div class="social-bar">
            <div class="fb-share-button" data-href="https://project-benchmark.herokuapp.com/" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fproject-benchmark.herokuapp.com%2F&amp;src=sdkpreparse">Share</a></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script type="IN/Share" data-url="https://project-benchmark.herokuapp.com/"></script>
        </div>
	  </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>

</body>
</html>
