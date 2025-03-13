<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Библиотека</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] text-[#1b1b18] text-4xl">
<div class="flex flex-col min-h-screen">
    <header class="px-8 py-4 sticky top-0 bg-[#FDFDFC] border-b-2 mb-4 border-[#e3e3e0]">
        <div class="container flex items-center justify-between">
            <a href="/" class="flex items-center gap-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-8"
                    viewBox="0 0 448 512">
                    <path
                        d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                </svg>
                <span>{{config()->get('app.name')}}</span>
            </a>
            <a
                href="/"
                class="text-xl font-semibold hover:text-violet-600 transition-colors">
                Добавить книгу
            </a>
        </div>
    </header>
    <main>
        <div class="container">

        </div>
    </main>
</div>
</body>
</html>
