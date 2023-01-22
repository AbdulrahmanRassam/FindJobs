<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- @yield('style') --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow ">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>

                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if ($msg=session('status'))

                <div role="alert">
                    <div class="max-w-7xl py-4 mt-4 mx-auto sm:px-6 lg:px-8 bg-green-900 text-white font-bold rounded-t px-4 py-2">
                        OOPs
                    </div>
                    <div class="max-w-7xl py-4 mx-auto sm:px-6 lg:px-8 border border-t-0 border-green-400 rounded-b bg-green-200 px-4 py-3 text-green-800">
                        <h3>{{$msg}}</h3>
                    </div>
                </div>

            @endif
            @if ($msg=session('fail'))
                    <div role="alert">
                        <div class="max-w-7xl py-4 mt-4 mx-auto sm:px-6 lg:px-8 bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            OOPs
                        </div>
                        <div class="max-w-7xl py-4 mx-auto sm:px-6 lg:px-8 border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <h3>{{$msg}}</h3>
                        </div>
                    </div>
            @endif
                {{ $slot }}
            </main>
        </div>

    </body>
</html>
