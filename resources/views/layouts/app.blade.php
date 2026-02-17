<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HRMS') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Top Bar -->
            <header class="bg-white shadow px-6 py-3 flex justify-between items-center">
                <h1 class="text-lg font-semibold text-gray-700">
                    {{ config('app.name', 'HRMS') }}
                </h1>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-600 hover:underline">
                        Logout
                    </button>
                </form>
            </header>

            <!-- Page Heading -->
            @if (isset($header))
                <div class="bg-white border-b px-6 py-4">
                    {{ $header }}
                </div>
            @endif

            <!-- Page Content -->
            <main class="p-6 flex-1">
                {{ $slot }}
            </main>

        </div>
    </div>
</body>
</html>
