<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config()->get('app.name')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] text-[#1b1b18] text-4xl">
<div class="flex flex-col pb-8">
    <x-header/>
    <main class="min-h-screen">
        @if(session()->has('success'))
            <x-alert
                type="success"
                message="{{session()->get('success')}}"/>
        @endif
        {{$slot}}
    </main>
</div>
</body>
</html>
