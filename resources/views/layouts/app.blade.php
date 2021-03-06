<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/svg+xml" href="{{env('APP_URL')}}/favicon.svg" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Icon Pack -->
        <script src="https://unpkg.com/phosphor-icons"></script>
    </head>
    <body class="font-sans antialiased">

        @if(Session::has('success'))
            <x-alert-bar :param="['success', Session::get('success')]"/>
        @elseif(Session::has('alert'))
            <x-alert-bar :param="['alert', Session::get('alert')]"/>
        @elseif(Session::has('danger'))
            <x-alert-bar :param="['danger', Session::get('danger')]"/>
        @endif


        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
