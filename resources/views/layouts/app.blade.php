<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.min.css" integrity="sha512-dAWyuzC1uq8T14qaENg+n0Vc7LkKjbC0FLEmYBRmd+1v74V9I5mCTvPZDclpsgd0FMPcySSMWG/s1yq2pa8MRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('css')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        @stack('script')
    </body>
</html>
