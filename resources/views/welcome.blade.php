<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Basic Meta Tags -->
        <meta name="description" content="QRFeedz - We hear you. Using QR code feedback with artificial intelligence to improve your business.">
        <meta name="keywords" content="QRFeedz, QR code, Feedback, Artificial Intelligence, Business Improvement">
        <meta name="author" content="QRFeedz">

        <!-- Facebook Open Graph -->
        <meta property="og:title" content="QRFeedz - We hear you">
        <meta property="og:description" content="Using QR code feedback with artificial intelligence to improve your business.">
        <meta property="og:image" content="{{ Vite::asset('resources/images/logo.png') }}">
        <meta property="og:url" content="https://qrfeedz.ch">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="QRFeedz - We hear you">
        <meta name="twitter:description" content="Using QR code feedback with artificial intelligence to improve your business.">
        <meta name="twitter:image" content="{{ Vite::asset('resources/images/logo.png') }}">
        <meta name="twitter:site" content="@qrfeedz">
        <meta name="twitter:creator" content="@qrfeedz">

        <!-- Standard favicon -->
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicons/favicon.ico') }}">

        <!-- For iPhone and iPad -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/favicons/apple-touch-icon.png') }}">

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

            .rounded-logo::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                box-shadow: 0 0 40px rgba(255, 255, 255, 0.09),
                            0 0 40px rgba(255, 255, 255, 0.07),
                            0 0 40px rgba(255, 255, 255, 0.05),
                            0 0 40px rgba(255, 255, 255, 0.03);
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <div class="flex flex-col items-center justify-center mx-auto h-screen text-center gap-8">
            <div class="rounded-logo relative h-64 w-64">
                <img class="h-full w-full object-cover" src="{{ Vite::asset('resources/images/logo.png') }}">
            </div>
            <p class="text-white tracking-wider text-2xl">WE HEAR YOU.</p>
        </div>
    </body>
</html>
