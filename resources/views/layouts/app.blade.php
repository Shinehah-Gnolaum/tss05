<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('layouts.meta')
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('google_analytics.analyticstracking')

    @include('facebook.script')
    
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
