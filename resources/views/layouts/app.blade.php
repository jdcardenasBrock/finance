<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href={{asset("assets/plugins/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
        <link href={{asset("assets/plugins/perfectscroll/perfect-scrollbar.css")}} rel="stylesheet">
        <link href={{asset("assets/plugins/pace/pace.css")}} rel="stylesheet">

        
        <!-- Theme Styles -->
        <link href={{asset("assets/css/main.min.css")}} rel="stylesheet">
        <link href={{asset("assets/css/custom.css")}} rel="stylesheet">

        <link rel="icon" type="image/png" sizes="32x32" href={{asset("assets/images/neptune.png")}}/>
        <link rel="icon" type="image/png" sizes="16x16" href={{asset("assets/images/neptune.png")}}/>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="app align-content-stretch d-flex flex-wrap">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="app-content">
                {{ $slot }}
            </div>
            {{-- Cierra div de navigation menu --}}
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        <script src={{asset("assets/plugins/jquery/jquery-3.5.1.min.js")}}></script>
        <script src={{asset("assets/plugins/bootstrap/js/bootstrap.min.js")}}></script>
        <script src={{asset("assets/plugins/perfectscroll/perfect-scrollbar.min.js")}}></script>
        <script src={{asset("assets/plugins/pace/pace.min.js")}}></script>
        <script src={{asset("assets/plugins/apexcharts/apexcharts.min.js")}}></script>
        <script src={{asset("assets/js/main.min.js")}}></script>
        <script src={{asset("assets/js/custom.js")}}></script>
        <script src={{asset("assets/js/pages/dashboard.js")}}></script>
    </body>
</html>
