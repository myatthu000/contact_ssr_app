<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--        <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&family=Inconsolata&family=Kanit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">--}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="h-screen bg-white">
                <div class="flex">
                    @include('contact.__sidebar')
                    <div class="w-full">
                        @include('contact.__navbar')
                        <main class="overflow-y-auto h-90">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
