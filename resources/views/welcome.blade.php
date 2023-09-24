<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Standard favicon -->
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicons/favicon.ico') }}">

        <!-- For iPhone and iPad -->
        <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicons/apple-touch-icon.png') }}">

        <!-- For Android -->
        <link rel="icon" type="image/png" sizes="192x192" href="{{ Vite::asset('resources/images/favicons/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ Vite::asset('resources/images/favicons/android-chrome-512x512.png') }}">

        <!-- For smaller resolutions -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicons/favicon-32x32.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
        <style>
            body {
                background-color: #111827;
                font-family: 'Nova Mono', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex flex-col items-center justify-center mx-auto h-screen text-center gap-8">
            <img class="h-64 w-64" src="{{ Vite::asset('resources/images/logo.png') }}">
            <p class="text-white tracking-wider text-2xl">WE HEAR YOU.</p>
        </div>
    </body>
</html>
