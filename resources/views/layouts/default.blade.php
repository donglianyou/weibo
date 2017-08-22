<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @include('layouts._header')
    <div class="container" id="app">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>