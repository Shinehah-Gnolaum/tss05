<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '1972898709607502',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.9'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="app" class="container">

        @include('layouts.nav')

        <h1 style="text-align:center;">{{ config('app.name') }}</h1>

        <hr>

        <br>

        @yield('content')

    </div>

    <div align="right"  style="padding-top:50px;padding-right:100px;padding-bottom:50px;padding-left: 100px">

      <div class="fb-like" data-href="http://texarkanasoftware.com" data-width="120" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
