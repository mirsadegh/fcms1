<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ECMS') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">   <!--load all styles font awesome -->

</head>
<body>
<div id="app">

    @include('fragments.nav')


    <main class="py-4">
        <div class="container">

            @include('fragments.message')
            @include('fragments.errors')
            @include('fragments.are_you_sure')
        </div>
        <div class="container bg-white py-4">
            @yield('content')
        </div>
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/panel.js') }}"></script>
</body>
</html>
