<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <x-nav.sidebar class="w-64" />
        <div class="flex-1 flex flex-col">
            <x-nav.topbar />
            <main class="p-6 flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
