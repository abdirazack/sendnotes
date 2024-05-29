<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- <link rel="icon" href="{{ asset('logo.svg') }}"> --}}
 <link rel="icon" href="{{ asset('/public/logo.svg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased h-screen flex flex-col">
    <div class="absolute top-0 right-0 p-6">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </div>

    <div class="flex-grow flex items-center justify-center">
        <div class="flex flex-col items-center justify-center space-y-4">
            <x-application-logo class="w-24 h-24 fill-current text-primary" />
            <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
        </div>
    </div>
</body>

</html>
