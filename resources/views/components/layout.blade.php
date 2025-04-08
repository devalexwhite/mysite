<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/favicon.svg" />

    <title>alex white.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-800">
    <header class="text-center w-full py-6 px-4 bg-blue-100 text-black">
        <h1 class="text-2xl">🐻 alex white.</h1>
    </header>
    <nav class="flex justify-center items-center gap-4 py-2 bg-black px-2">
        <a href="/" class="text-white hover:text-blue-300 underline">home</a>
        <a href="{{ route('articles.index') }}" class="text-white hover:text-blue-300 underline">articles</a>
        <!--  <a href="#" class="text-white hover:text-blue-300 underline">contact</a> -->
    </nav>
    <main class="max-w-4xl mx-auto my-16">
        {{ $slot }}
    </main>
</body>

</html>