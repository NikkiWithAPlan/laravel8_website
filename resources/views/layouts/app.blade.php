<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DC79') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Editor -->
    <script src="https://cdn.tiny.cloud/1/4lcof6sd3si5by5c5lo61tazlmzg5gvv0tm2ted9qw7yyxr2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        @include('layouts.navigationbar')

        <div class="container">
            <main class="py-4">
                @yield('content')
                @yield('tinyEditor')
            </main>
        </div>
    </div>
</body>
</html>
