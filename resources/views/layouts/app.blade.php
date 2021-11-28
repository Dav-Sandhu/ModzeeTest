<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <script src="{{asset('jquery-3.6.0.js')}}"></script>
        <title>{{config('app.name', 'ModzeeTest')}}</title>
        
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>